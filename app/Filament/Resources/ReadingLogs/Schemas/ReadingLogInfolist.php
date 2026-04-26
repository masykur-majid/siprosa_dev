<?php

namespace App\Filament\Resources\ReadingLogs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ReadingLogInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('reading_progress_id')
                    ->numeric(),
                TextEntry::make('read_date')
                    ->date(),
                TextEntry::make('total_pages_read')
                    ->numeric(),
                TextEntry::make('last_page_read')
                    ->numeric(),
                TextEntry::make('notes')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
