<?php

namespace App\Livewire;

use App\Models\Student;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;


class StudentsInThisClass extends TableWidget
{
    public $record;
    protected $listeners = ['refreshStudentsList' => '$refresh'];
    
    public function table(Table $table): Table
    { 
        return $table
            ->heading('Students of '.$this->record->class_name)
            ->description('Total: ' . Student::query()->countStudentsInAClass($this->record->class_name) . ' students')
            ->extraAttributes([
                'class' => '[&_.fi-ta-search-field]:!w-full [&_.fi-ta-search-field]:!max-w-none',
            ])
            ->query(
                Student::query()
                    ->showStudentsBelongToTheClass($this->record->class_name)
            )

            ->columns([
                TextColumn::make('nisn')
                    ->searchable()
                    ->size('xs'),
                TextColumn::make('full_name')
                    ->searchable()
                    ->size('xs'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                Action::make('Remove')
                    ->badge()
                    ->action(function (Student $student){
                        $student->removeStudentFromTheClass($student->id);
                        
                        $this->dispatch('refreshStudentsList');
                    })
                    ->tooltip('Remove From This Class')
                    ->icon(Heroicon::OutlinedXCircle)
                    ->color('danger')
                    ->size('lg')
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
