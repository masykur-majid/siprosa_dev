<?php

namespace App\Filament\Resources\ReadingProgress\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Grouping\Group;

class ReadingProgressInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Student Identity')
                    ->schema([
                        TextEntry::make('students.full_name')
                            ->label('Student Name:')
                            ->size('lg')
                            ->weight('bold')
                            ->color('primary')
                            ->numeric(),
                        TextEntry::make('students.classname')
                            ->label('Class:')
                            ->size('lg')
                            ->weight('bold')
                            ->numeric(),
                    ])
                    ->columns(3),

                Section::make('Book Information')
                    ->schema([
                        TextEntry::make('books.title')
                            ->label('Book Title:')
                            ->color('primary')
                            ->size('lg')
                            ->weight('bold')
                            ->numeric(),
                        TextEntry::make('books.author')
                            ->label('Book Author:')
                            ->size('lg')
                            ->weight('bold')
                            ->numeric(),
                        TextEntry::make('books.total_pages')
                            ->label('Total Pages:')
                            ->size('lg')
                            ->weight('bold')
                            ->numeric(),
                    ])
                    ->columns(3),
                
                Section::make('Reading Progress')
                    ->schema([
                        TextEntry::make('status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'reading' => 'info',
                                'finished' => 'success',
                                'dropped' => 'gray',
                            })
                            ->extraAttributes([
                                'class' => 'my-custom-badge-size',
                            ]),
                        TextEntry::make('current_page')
                            ->size('lg')
                            ->weight('bold')
                            ->numeric(),
                        TextEntry::make('started_at')
                            ->date(),
                        TextEntry::make('finished_at')
                            ->date(),
                    ])->columns(4)
            ])
            ->columns(1);
    }
}
