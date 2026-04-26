<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nisn'),
                TextInput::make('nis'),
                TextInput::make('full_name')
                    ->required(),
                Select::make('current_grade')
                    ->required()
                    ->options([
                        'X' => 'X',
                        'XI' => 'XI',
                        'XII' => 'XII'
                    ])
                    ->default('X'),
                Select::make('classname')
                    ->relationship('classList', 'class_name'),
            ]);
    }
}
