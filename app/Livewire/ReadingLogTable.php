<?php

namespace App\Livewire;

use App\Filament\Resources\ReadingLogs\ReadingLogResource;
use App\Models\ReadingLog;
use App\Models\ReadingProgress;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class ReadingLogTable extends TableWidget
{
    protected int | string | array $columnSpan = 'full';
    
    public $record;
    
    public function table(Table $table): Table
    {

        return $table
            ->query(ReadingLog::query()->getReadingLogs($this->record->id))
            ->columns([
                // TextColumn::make('reading_progress_id')
                //     ->sortable(),
                TextColumn::make('read_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('total_pages_read')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('last_page_read')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('notes')
                    ->wrap(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make('New Log')
                    ->schema(fn (Schema $form) => ReadingLogResource::form($form)->getComponents())
                    ->mutateDataUsing(function (array $data): array{
                        $data['reading_progress_id'] = $this->record->id;
                        return $data;
                    })
                    ->after(function (){
                        $this->dispatch('refresh-infolist');
                    })
                    ->slideOver()
            ])
            ->recordActions([
                EditAction::make()
                    ->schema(fn (Schema $form) => ReadingLogResource::form($form)->getComponents())
                    ->mutateDataUsing(function (array $data): array{
                        $data['reading_progress_id'] = $this->record->id;
                        return $data;
                    })
                    ->after(function (){ 
                        $this->dispatch('refresh-infolist');
                    })
                    ->slideOver(),

                DeleteAction::make()
                    ->after(function (){
                        $this->dispatch('refresh-infolist');
                    }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
