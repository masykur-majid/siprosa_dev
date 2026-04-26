<?php

namespace App\Filament\Resources\Vocations;

use App\Filament\Resources\Vocations\Pages\CreateVocation;
use App\Filament\Resources\Vocations\Pages\EditVocation;
use App\Filament\Resources\Vocations\Pages\ListVocations;
use App\Filament\Resources\Vocations\Schemas\VocationForm;
use App\Filament\Resources\Vocations\Tables\VocationsTable;
use App\Models\Vocation;
use BackedEnum;
use Daljo25\FilamentTablerIcons\Enums\TablerIcon;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class VocationResource extends Resource
{
    protected static ?string $model = Vocation::class;

    protected static string|BackedEnum|null $navigationIcon = TablerIcon::SquareRoundedLetterVFilled;
    protected static string|UnitEnum|null $navigationGroup = 'Students & Class';
    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return VocationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VocationsTable::configure($table);
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
            'index' => ListVocations::route('/'),
            //'create' => CreateVocation::route('/create'),
            // 'edit' => EditVocation::route('/{record}/edit'),
        ];
    }
}
