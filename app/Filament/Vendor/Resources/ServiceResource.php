<?php

namespace App\Filament\Vendor\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Listing;
use App\Models\Service;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Vendor\Resources\ServiceResource\Pages;
use App\Filament\Vendor\Resources\ServiceResource\RelationManagers;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Listings';

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
                                $parentCategory = Category::where('slug', 'services')->first();
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
                Forms\Components\TextInput::make('service_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('more_specific_address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('website')
                    ->url(),
                Forms\Components\Textarea::make('service_time_schedule')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('editor_description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('self_information')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('media_coverage_images')->image()->multiple(),
                Forms\Components\FileUpload::make('product_brochures')->image()->multiple(),
                Repeater::make('team_members')
                    ->schema([
                        TextInput::make('name')->required(),
                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->required(),
                    ])
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('service_offered')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('google_map_embed_code')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('photos')
                    ->image()
                    ->multiple()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('listing.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('service_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('more_specific_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
