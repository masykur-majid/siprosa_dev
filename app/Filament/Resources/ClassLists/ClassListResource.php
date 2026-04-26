<?php

namespace App\Filament\Resources\ClassLists;

use App\Filament\Resources\ClassLists\Pages\CreateClassList;
use App\Filament\Resources\ClassLists\Pages\EditClassList;
use App\Filament\Resources\ClassLists\Pages\ListClassLists;
use App\Filament\Resources\ClassLists\Pages\ViewClassList;
use App\Filament\Resources\ClassLists\Schemas\ClassListForm;
use App\Filament\Resources\ClassLists\Schemas\ClassListInfolist;
use App\Filament\Resources\ClassLists\Tables\ClassListsTable;
use App\Models\ClassList;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class ClassListResource extends Resource
{
    protected static ?string $model = ClassList::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Wallet;
    protected static ?string $navigationLabel = 'Class Management';
    protected static ?string $pluralModelLabel = 'Class Management';
    protected static string|UnitEnum|null $navigationGroup = 'Students & Class';
    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return ClassListForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ClassListInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassListsTable::configure($table);
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
            'index' => ListClassLists::route('/'),
            //'create' => CreateClassList::route('/create'),
            'view' => ViewClassList::route('/{record}'),
            //'edit' => EditClassList::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withCount('students as numOfStudents');
    }
}
