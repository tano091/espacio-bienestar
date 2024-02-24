<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComputadoraResource\Pages;
use App\Filament\Resources\ComputadoraResource\RelationManagers;
use App\Models\Computadora;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ComputadoraResource extends Resource
{
    protected static ?string $model = Computadora::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre')
                    ->autofocus()
                    ->rules(['required', 'min:4', 'max:10'])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->sortable()
                    ->searchable(isIndividual : true, isGlobal : false),
                SelectColumn::make('estado')
                    ->options([
                        'libre' => 'Libre',
                        'ocupada' => 'Ocupada',
                    ])
                    ->selectablePlaceholder(false)
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageComputadoras::route('/'),
        ];
    }
}
