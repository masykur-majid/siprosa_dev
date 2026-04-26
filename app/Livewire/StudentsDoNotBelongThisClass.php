<?php

namespace App\Livewire;

use App\Models\ClassList;
use App\Models\Student;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Infolists\Components\IconEntry;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Enums\FiltersResetActionPosition;
use Filament\Tables\Enums\RecordActionsPosition;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class StudentsDoNotBelongThisClass extends TableWidget
{
    public $record;
    protected $listeners = ['refreshStudentsList'=> 'refresh'];
    public function table(Table $table): Table
    {
        return $table
            ->heading('Students Not In This Class')
            ->description(Student::query()->countStudentsNotInAClass($this->record->class_name))
            ->query(
                Student::query()->showStudentsDoNotBelongToTheClass($this->record->class_name)
            )
            
            ->columns([
                TextColumn::make('nisn')
                    ->searchable()
                    ->size('xs'),
                TextColumn::make('full_name')
                    ->searchable()
                    ->sortable()
                    ->size('xs'),
                TextColumn::make('classname')
                    ->searchable()
                    ->sortable()
                    ->size('xs'),
            ])

            ->filters([
                
                TernaryFilter::make('show_student_that')
                    ->label('Show students who')
                    ->placeholder('IN other and NOT IN a class')
                    ->trueLabel('haven\'t got into a class')
                    ->falseLabel('is in the other Class')
                    ->queries(
                        true: fn (Builder $query) => $query->doesntHave('classlists'),
                        false: fn (Builder $query) => $query->has('classlists'),
                    )
            ], layout: FiltersLayout::AboveContent)
            ->filtersResetActionPosition(FiltersResetActionPosition::Footer)
            ->filtersFormColumns(1)
            

            ->headerActions([
                //
            ])
            ->recordActions([
                Action::make('Add')
                    ->badge()
                    ->extraAttributes(['class' => 'inline-block m-2 p-2'])
                    ->action(function (Student $student){
                        $student->addStudentToTheClass($student->id, $this->record->class_name);
                        
                        $this->dispatch('refreshStudentsList');
                    })
                    ->hiddenLabel()
                    ->tooltip('Add to This Class')
                    ->icon(Heroicon::OutlinedPlusCircle)
                    ->color('success')
                    ->size('lg')
                    
            ], position: RecordActionsPosition::AfterColumns)
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
