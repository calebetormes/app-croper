<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipoDePesoResource\Pages;
use App\Models\TipoDePeso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TipoDePesoResource extends Resource
{
    protected static ?string $model = TipoDePeso::class;

    protected static ?string $navigationIcon = 'heroicon-o-ellipsis-horizontal';

    protected static ?string $navigationGroup = 'Produtos';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Pesos/Medidas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tipo_peso')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipo_peso')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTipoDePesos::route('/'),
        ];
    }
}
