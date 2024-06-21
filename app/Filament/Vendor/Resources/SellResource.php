<?php

namespace App\Filament\Vendor\Resources;

use Filament\Forms;
use App\Models\Sell;
use Filament\Tables;
use App\Models\Listing;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Vendor\Resources\SellResource\Pages;
use App\Filament\Vendor\Resources\SellResource\RelationManagers;

class SellResource extends Resource
{
    protected static ?string $model = Sell::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = 'Listings';
    protected static ?string $navigationLabel = 'Buy & Sell';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('listing_id')
                    ->label('Assign Basic Listing')
                    ->relationship('listing', 'title')
                    ->unique(ignoreRecord:true)
                    ->options(
                        Listing::where('user_id', Filament::auth()->user()->id)->pluck('title', 'id'),
                    )
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('title')
                            ->required(),
                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->options(function () {
                                $parentCategory = Category::where('slug', 'buy-sell')->first();
                                if ($parentCategory) {
                                    return Category::where('parent_id', $parentCategory->id)->pluck('name', 'id');
                                }
                                return [];
                            })
                            ->required(),
                        TextInput::make('user_id')
                            ->default(Filament::auth()->user()->id)
                            ->required()
                            ->readOnly(),
                    ]),
                Forms\Components\Select::make('type')
                    ->options([
                        'used' => 'Used Product',
                        'new' => 'New Product',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('short_product_name')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('attachments')
                    ->multiple()
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('model_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('pick_up_location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sales_price')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('original_price')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('purchased_time')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('listing.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('short_product_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pick_up_location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sales_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('original_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('purchased_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSells::route('/'),
            'create' => Pages\CreateSell::route('/create'),
            'edit' => Pages\EditSell::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $userId = Filament::auth()->user()->id;

        return parent::getEloquentQuery()
                    ->whereHas('listing', function ($query) use ($userId) {
                        $query->where('user_id', $userId);
                    });
    }
}
