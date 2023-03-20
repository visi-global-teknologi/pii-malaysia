<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Emagazine;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EmagazineResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EmagazineResource\RelationManagers;

class EmagazineResource extends Resource
{
    protected static ?string $model = Emagazine::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Emagazines';

    protected static ?string $navigationLabel = 'Lists';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(3)
                    ->maxLength(100),

                FileUpload::make('image')
                    ->disk('emagazine')
                    ->image()
                    ->required()
                    ->maxSize(1024)
                    ->visibility('public'),

                TextInput::make('url_file')
                    ->required()
                    ->url(),

                TiptapEditor::make('description')
                    ->profile('barebone')
                    ->required(),

                Select::make('emagazine_category_id')->required()->relationship('emagazine_category', 'name'),

                Select::make('is_enabled')->required()
                ->options([
                    'no' => 'No',
                    'yes' => 'Yes'
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),

                ImageColumn::make('image')->disk('emagazine'),

                TextColumn::make('emagazine_category.name')->searchable(),

                SelectColumn::make('is_enabled')
                ->options([
                    'no' => 'No',
                    'yes' => 'Yes',
                ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEmagazines::route('/'),
            'create' => Pages\CreateEmagazine::route('/create'),
            'edit' => Pages\EditEmagazine::route('/{record}/edit'),
        ];
    }
}
