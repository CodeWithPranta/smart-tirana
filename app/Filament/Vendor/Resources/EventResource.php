<?php

namespace App\Filament\Vendor\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
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
use App\Filament\Vendor\Resources\EventResource\Pages;
use App\Filament\Vendor\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
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
                                $parentCategory = Category::where('slug', 'events')->first();
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
                Forms\Components\TextInput::make('event_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('event_status')
                    ->options(
                        [
                            'one-off-event' => 'One-off Event',
                            'ongoing-event-or-deal' => 'Ongoing Event or Deal',
                        ]
                    )
                    ->required()
                    ->reactive(),
                Forms\Components\DatePicker::make('on_date')
                    ->required()
                    ->visible(fn ($get) => $get('event_status') === 'one-off-event' || $get('event_status') === 'ongoing-event-or-deal'), // Show for both event statuses
                Forms\Components\DatePicker::make('ends_on_date')->visible(fn ($get) => $get('event_status') === 'ongoing-event-or-deal'),
                Forms\Components\CheckboxList::make('weekdays')
                     ->options(
                        [
                            'Mon' => 'Mon',
                            'Tue' => 'Tue',
                            'Wed' => 'Wed',
                            'Thu' => 'Thu',
                            'Fri' => 'Fri',
                            'Sat' => 'Sat',
                            'Sun' => 'Sun',
                        ]
                     )
                     ->columns(4)
                     ->visible(fn ($get) => $get('event_status') === 'ongoing-event-or-deal'),
                Forms\Components\TextInput::make('starts_at_time')
                    ->required(),
                Forms\Components\Textarea::make('event_description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('price')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('event_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('venue_id')
                    ->relationship('venue', 'id'),
                Forms\Components\TextInput::make('contact_of_organizer')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('flyer_image')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('menu_image')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('event_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('on_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ends_on_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('starts_at_time'),
                Tables\Columns\TextColumn::make('event_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('venue.venue_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_of_organizer')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('flyer_image'),
                Tables\Columns\ImageColumn::make('menu_image'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
