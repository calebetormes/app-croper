<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers\VendedoresRelationManager;
use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Settings';

    // Adicione esse método na classe UserResource
    public static function canAccess(): bool
    {
        return auth()->user()?->role?->name === 'Admin';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Grid::make(2)->schema([
                    TextInput::make('name')
                        ->label('Nome')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required()
                        ->maxLength(255),

                    Select::make('role_id')
                        ->label('Papel')
                        ->relationship('role', 'name')
                        ->required(),

                    TextInput::make('password')
                        ->label('Senha')
                        ->password()
                        ->dehydrated(fn ($state) => filled($state))
                        ->required(fn ($context) => $context === 'create')
                        ->maxLength(255),

                    TextInput::make('password_confirmation')
                        ->label('Confirmar Senha')
                        ->password()
                        ->dehydrated(false)
                        ->required(fn ($context) => $context === 'create'),
                ]),

                Select::make('vendedoresRelacionados')
                    ->label('Vendedores Gerenciados')
                    ->multiple()
                    ->relationship('vendedoresRelacionados', 'name')
                    ->preload()
                    ->searchable()
                    ->hidden(fn ($livewire) => $livewire->record?->role?->name !== 'Gerente Nacional'
                    && $livewire->record?->role?->name !== 'Gerente Comercial'),
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->label('Nome')->sortable()->searchable(),
                TextColumn::make('email')->label('Email')->sortable()->searchable(),
                TextColumn::make('role.name')->label('Papel'),
                TextColumn::make('created_at')->label('Criado em')->dateTime('d/m/Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make()->iconButton(), // se quiser ver detalhes
                Tables\Actions\EditAction::make()->iconButton(),
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
            VendedoresRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
            'view' => Pages\ViewUser::route('/{record}/view'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['gerentesRelacionados', 'role']);
    }
}
