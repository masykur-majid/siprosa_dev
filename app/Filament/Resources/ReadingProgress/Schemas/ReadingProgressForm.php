<?php

namespace App\Filament\Resources\ReadingProgress\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReadingProgressForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->label('Student Name')
                    ->relationship('students', 'full_name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('book_id')
                    ->label('Book Title')
                    ->relationship('books', 'title')
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('status')
                    ->default('reading')
                    ->disabled()
                    ->dehydrated()
                    ->required(),
                TextInput::make('current_page')
                    ->required()
                    ->numeric(),
                DatePicker::make('started_at')
                    ->required(),
            ]);
    }
}
