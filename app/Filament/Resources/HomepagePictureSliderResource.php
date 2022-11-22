<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\HomepagePictureSlider;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomepagePictureSliderResource\Pages;
use App\Filament\Resources\HomepagePictureSliderResource\RelationManagers;

class HomepagePictureSliderResource extends Resource
{
    protected static ?string $model = HomepagePictureSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->disk('homepage-picture-slider')
                    ->image()
                    ->required()
                    ->maxSize(1024)
                    ->visibility('public'),

                Select::make('is_enabled')->required()
                    ->options([
                        'no' => 'No',
                        'yes' => 'Yes'
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->disk('homepage-picture-slider'),
                SelectColumn::make('is_enabled')
                ->options([
                    'no' => 'No',
                    'yes' => 'Yes',
                ]),
            ])
            ->filters([
                SelectFilter::make('is_enabled')
                ->options([
                    'no' => 'No',
                    'yes' => 'Yes',
                ])
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
            'index' => Pages\ListHomepagePictureSliders::route('/'),
            'create' => Pages\CreateHomepagePictureSlider::route('/create'),
            'edit' => Pages\EditHomepagePictureSlider::route('/{record}/edit'),
        ];
    }
}
