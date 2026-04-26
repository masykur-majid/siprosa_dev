<?php

namespace App\Filament\Resources\ReadingLogs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ReadingLogForm
{
    public $record;

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                
                        DatePicker::make('read_date')
                            ->required(),
                        TextInput::make('total_pages_read')
                            ->required()
                            ->numeric(),
                        TextInput::make('last_page_read')
                            ->required()
                            ->numeric(),
                        Textarea::make('notes')
                            ->required()
                            ->columnSpanFull(),
            ]);
    }
}