<?php

namespace App\Filament\Vendor\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Housing;
use App\Models\Listing;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Vendor\Resources\HousingResource\Pages;
use App\Filament\Vendor\Resources\HousingResource\RelationManagers;

class HousingResource extends Resource
{
    protected static ?string $model = Housing::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationGroup = 'Listings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('listing_id')
                    ->label('Assign Basic Listing')
                    ->relationship('listing', 'title')
                    ->unique(ignoreRecord:true)
                    ->columnSpanFull()
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
                                $parentCategory = Category::where('slug', 'housing')->first();
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
                Forms\Components\Radio::make('property_type')
                    ->options([
                        'Offices for rent' => 'Offices for rent',
                        'Commercial spaces' => 'Commercial spaces',
                        'Event spaces' => 'Event spaces',
                        'Meeting rooms' => 'Meeting rooms',
                    ])
                    ->required(),
                Forms\Components\Radio::make('owner_status')
                    ->options([
                        'Landlord' => 'Landlord',
                        'Second Landlord' => '2nd Landlord',
                        'Private Sharing' => 'Private Sharing',
                        'Lease Takeover' => 'Lease Takeover',
                        'Agency' => 'Agency',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('compound_or_building_name')
                    ->maxLength(255),
                Forms\Components\Textarea::make('basic_information')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('floor')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('size')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('main_windows_face_direction')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bedrooms')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('bathrooms')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('photos')
                    ->required(),
                Forms\Components\TextInput::make('features')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('period')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('available_from')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('location_on_google_map')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('listing.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('property_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('owner_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('compound_or_building_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('floor')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('size')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('main_windows_face_direction')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bedrooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bathrooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('period')
                    ->searchable(),
                Tables\Columns\TextColumn::make('available_from')
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
            'index' => Pages\ListHousings::route('/'),
            'create' => Pages\CreateHousing::route('/create'),
            'edit' => Pages\EditHousing::route('/{record}/edit'),
        ];
    }
}
