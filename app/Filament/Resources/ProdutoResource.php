<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdutoResource\Pages;
use App\Models\Produto;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
//
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProdutoResource extends Resource
{
    protected static ?string $model = Produto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Configurações';

    protected static ?string $navigationLabel = 'Produtos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('id')
                    ->label('ID')
                    ->disabled()
                    ->visible(fn ($record) => filled($record)),
                Select::make('classe')
                    ->label('Classe do Produto')
                    ->relationship('classeProduto', 'nome')
                    ->required(),

                Select::make('principios_ativo')
                    ->label('Princípio Ativo')
                    ->relationship('principioAtivo', 'nome')
                    ->required(),

                Select::make('marca_comercial')
                    ->label('Marca Comercial')
                    ->relationship('marcaComercial', 'nome')
                    ->required(),

                Select::make('tipos_de_peso')
                    ->label('Tipo de Peso')
                    ->relationship('tipoDePeso', 'tipo_peso')
                    ->required(),

                Select::make('familia')
                    ->label('Família')
                    ->relationship('familiaProduto', 'familia')
                    ->required(),

                TextInput::make('apresentacao')
                    ->label('Apresentação')
                    ->required(),

                TextInput::make('dose_sugerida_hectare')
                    ->label('Dose Sugerida por Hectare')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('classeProduto.nome')
                    ->label('Classe')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('principioAtivo.nome')
                    ->label('Princípio Ativo')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('marcaComercial.nome')
                    ->label('Marca Comercial')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tipoDePeso.tipo_peso')
                    ->label('Tipo de Peso')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('familiaProduto.familia')
                    ->label('Família')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('apresentacao')
                    ->label('Apresentação')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('dose_sugerida_hectare')
                    ->label('Dose por Hectare')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListProdutos::route('/'),
            'create' => Pages\CreateProduto::route('/create'),
            'edit' => Pages\EditProduto::route('/{record}/edit'),
        ];
    }
}
