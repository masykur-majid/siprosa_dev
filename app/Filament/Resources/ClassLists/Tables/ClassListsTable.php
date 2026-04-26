<?php

namespace App\Filament\Resources\ClassLists\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use PhpParser\Node\Stmt\Label;

class ClassListsTable
{
    

    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('class_name')
                    ->label('Class Name')
                    ->searchable(),
                TextColumn::make('vocations.vocation_name')
                    ->label('Vocational')
                    ->searchable(),
                TextColumn::make('numOfStudents')
                    ->badge()
                    ->alignCenter()
                    ->label('Number of Students')
                    ->size('lg'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Last Update')
                    ->dateTime()
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()
                    ->label('Manage')
                    ->icon(Heroicon::Wallet)
                    ->color('success'),
                EditAction::make()
                    ->color('Mist')
                    ->slideOver()
                    ->modalHeading('Edit the class')
                    ->modalWidth('md'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
