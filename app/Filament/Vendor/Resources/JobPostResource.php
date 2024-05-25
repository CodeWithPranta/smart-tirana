<?php

namespace App\Filament\Vendor\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\JobPost;
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
use App\Filament\Vendor\Resources\JobPostResource\Pages;
use App\Filament\Vendor\Resources\JobPostResource\RelationManagers;

class JobPostResource extends Resource
{
    protected static ?string $model = JobPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
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
                            $parentCategory = Category::where('slug', 'jobs')->first();
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
                Forms\Components\Select::make('city_id')
                    ->relationship('city', 'name')
                    ->required(),
                Forms\Components\Select::make('job_type')
                    ->required()
                    ->options(
                        [
                            'fulltime' => 'Fulltime',
                            'freelance' => 'Freelance',
                            'Internship' => 'Internship',
                        ]
                    ),
                Forms\Components\Select::make('location_type')
                    ->required()
                    ->options([
                        'office' => 'Office',
                        'remote-work' => 'Remote Work',
                        'hybrid' => 'Hybrid (Office & Remote Work)'
                    ]),
                Forms\Components\Select::make('seniority')
                    ->required()
                    ->options([
                        'unspecified' => 'Unspecified',
                        'no-prior-experience-required' => 'No Prior Experience Required',
                        'junior' => 'Junior',
                        'senior' => 'Senior',
                        'executive' => 'Executive',
                    ]),
                Forms\Components\TextInput::make('min_salary')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('max_salary')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('candidate_location')
                    ->required()
                    ->options([
                        'only-applicants-currently-in-tirana' => 'Only applicants currently in Tirana',
                        'only-applicants-currently-in-Albania' => 'Only applicants currently in Albania',
                        'overseas-candidates-welcome' => 'Overseas candidates welcome',
                        'relocation-options-included-in-package-for-qualified-candidates' => 'Relocation options included in package for qualified candidates'
                    ]),
                Forms\Components\TextInput::make('job_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('office_address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('company_introduction')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('company_website')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('listing_logo_image')
                    ->image()
                    ->required(),
                Forms\Components\RichEditor::make('general_job_description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('position_requirements')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('benefits')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('additional_application_instructions')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('your_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('your_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('listing.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('job_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('seniority')
                    ->searchable(),
                Tables\Columns\TextColumn::make('min_salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('max_salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('candidate_location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_website')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('listing_logo_image'),
                Tables\Columns\TextColumn::make('your_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('your_phone')
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
            'index' => Pages\ListJobPosts::route('/'),
            'create' => Pages\CreateJobPost::route('/create'),
            'edit' => Pages\EditJobPost::route('/{record}/edit'),
        ];
    }
}
