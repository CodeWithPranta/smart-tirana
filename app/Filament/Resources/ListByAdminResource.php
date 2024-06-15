<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Listing;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ListByAdmin;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ListByAdminResource\Pages;
use App\Filament\Resources\ListByAdminResource\RelationManagers;

class ListByAdminResource extends Resource
{
    protected static ?string $model = ListByAdmin::class;

    protected static ?string $navigationIcon = 'heroicon-o-bug-ant';

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
                            return Category::where('parent_id', '!=', null)->pluck('name', 'id');
                        })
                        ->searchable()
                        ->preload()
                        ->required(),
                    TextInput::make('user_id')
                        ->default(Filament::auth()->user()->id)
                        ->required()
                        ->readOnly(),
                ]),
                Forms\Components\TextInput::make('main_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Repeater::make('list_details')
                    ->schema([
                        TextInput::make('title')->required(),
                        Textarea::make('description')->required(),
                    ])
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('photos')->image()->multiple()->required()->columnSpanFull(),
                Forms\Components\KeyValue::make('key_values')
                ->columnSpanFull(),
                Forms\Components\Textarea::make('google_map_code')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('listing_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('main_title')
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
            'index' => Pages\ListListByAdmins::route('/'),
            'create' => Pages\CreateListByAdmin::route('/create'),
            'edit' => Pages\EditListByAdmin::route('/{record}/edit'),
        ];
    }
}
