<?php

namespace App\Filament\Resources\ReadingProgress;

use App\Filament\Resources\ReadingProgress\Pages\CreateReadingProgress;
use App\Filament\Resources\ReadingProgress\Pages\EditReadingProgress;
use App\Filament\Resources\ReadingProgress\Pages\ListReadingProgress;
use App\Filament\Resources\ReadingProgress\Pages\ViewReadingProgress;
use App\Filament\Resources\ReadingProgress\Schemas\ReadingProgressForm;
use App\Filament\Resources\ReadingProgress\Schemas\ReadingProgressInfolist;
use App\Filament\Resources\ReadingProgress\Tables\ReadingProgressTable;
use App\Models\ReadingProgress;
use BackedEnum;
use Daljo25\FilamentTablerIcons\Enums\TablerIcon;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ReadingProgressResource extends Resource
{
    protected static ?string $model = ReadingProgress::class;

    protected static string|BackedEnum|null $navigationIcon = TablerIcon::ChartDonutFilled;

    protected static string|UnitEnum|null $navigationGroup = 'Morning Reader';
    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return ReadingProgressForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ReadingProgressInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReadingProgressTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReadingProgress::route('/'),
            'create' => CreateReadingProgress::route('/create'),
            'view' => ViewReadingProgress::route('/{record}'),
            'edit' => EditReadingProgress::route('/{record}/edit'),
        ];
    }
}
