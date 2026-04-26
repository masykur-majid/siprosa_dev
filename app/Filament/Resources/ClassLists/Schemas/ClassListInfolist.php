<?php

namespace App\Filament\Resources\ClassLists\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Text;
use Filament\Schemas\Schema;
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;

class ClassListInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('class_name')
                    ->hiddenLabel()
                    ->size(TextSize::Large)
                    ->weight('black')
                    ->icon(Heroicon::UserGroup)
                    ->iconColor('success')
                    ->color('success')
                    ->badge()
                   
                    

            ]);
    }
}
