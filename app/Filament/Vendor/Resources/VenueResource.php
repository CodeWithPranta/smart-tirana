<?php

namespace App\Filament\Vendor\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Venue;
use App\Models\Listing;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Vendor\Resources\VenueResource\Pages;
use App\Filament\Vendor\Resources\VenueResource\RelationManagers;

class VenueResource extends Resource
{
    protected static ?string $model = Venue::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                        ->options(
                            Category::where('parent_id', Category::where('slug', 'buy-sell')->first()->id)
                                    ->pluck('name', 'id')
                        )
                        ->required(),
                    TextInput::make('user_id')
                        ->default(Filament::auth()->user()->id)
                        ->required()
                        ->readOnly(),
                ]),
                Forms\Components\TextInput::make('venue_name')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('attachments')
                    ->multiple()
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('nearest_cross_street')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('nearby_metro')
                    ->placeholder('e.g. 10 minutes walk to MetroName.')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('channel_id')
                    ->label('Whatsapp No./ WeChat ID/ Channel ID ')
                    ->placeholder('e.g. 355XXXXXXXX')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('website')
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('opening_hours')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('wifi_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('wifi_password')
                    ->password()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('venue_description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('open_since')
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
                Tables\Columns\TextColumn::make('venue_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nearest_cross_street')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('channel_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wifi_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('open_since')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListVenues::route('/'),
            'create' => Pages\CreateVenue::route('/create'),
            'edit' => Pages\EditVenue::route('/{record}/edit'),
        ];
    }
}
