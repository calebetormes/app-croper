<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class VendedoresRelationManager extends RelationManager
{
    protected static string $relationship = 'vendedoresRelacionados';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nome')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->recordSelect(fn () => Select::make('recordId')
                        ->label('Vendedor')
                        ->searchable()
                        ->preload()
                        /*->getSearchResultsUsing(fn (string $search) => \App\Models\User::query()
                            ->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%")
                            ->limit(20)
                            ->pluck('name', 'id')
                        )*/
                        ->getSearchResultsUsing(fn (string $search) => \App\Models\User::query()
                            ->whereHas('role', fn ($query) => $query->where('name', 'Vendedor')) // Filtra por papel
                            ->where(function ($query) use ($search) {
                                $query->where('name', 'like', "%{$search}%")
                                    ->orWhere('email', 'like', "%{$search}%");
                            })
                            ->limit(20)
                            ->pluck('name', 'id')
                        )
                        ->getOptionLabelUsing(fn ($value): ?string => \App\Models\User::find($value)?->name
                        )
                    ),

                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->iconButton(),
                Tables\Actions\DeleteAction::make()->iconButton(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function canViewForRecord(Model $ownerRecord, string $pageClass): bool
    {
        return in_array($ownerRecord->role?->name, ['Gerente Nacional', 'Gerente Comercial']);
    }
}
