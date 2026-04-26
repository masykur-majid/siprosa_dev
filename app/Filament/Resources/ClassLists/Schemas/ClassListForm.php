<?php

namespace App\Filament\Resources\ClassLists\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassListForm
{
    
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('class_name')
                    ->required(),
                Select::make('vocational')
                    ->relationship('vocations', 'vocation_name')
                    ->required(),
            ])
            ->columns(1);
    }
}
