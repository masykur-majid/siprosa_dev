<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable('nisn', 'nis', 'full_name', 'current_grade', 'classname')]
class Student extends Model
{
    use HasFactory;
    public function classLists(): BelongsTo
    {
        return $this->belongsTo(ClassList::class, 'classname', 'class_name');
    }

    public function scopeShowStudentsBelongToTheClass(Builder $query, $classname)
    {
        return $query->where('classname', $classname)
                     ->orderBy('updated_at', 'desc');
    }
    
    public function scopeShowStudentsDoNotBelongToTheClass(Builder $query, $classname)
    {
        return $query->whereNull('classname')
                     ->orWhere('classname', '!=', $classname)
                     ->orderBy('updated_at', 'desc');
    }

    public function scopeAddStudentToTheClass(Builder $query, $student_id, $classname)
    {
        return $query->where('id', $student_id)->update(['classname' => $classname]);
    }

    public function scopeRemoveStudentFromTheClass(Builder $query, $student_id)
    {
        return $query->where('id', $student_id)->update(['classname' => null]);
    }

    public function scopeCountStudentsInAClass(Builder $query, $classname)
    {
        return $query->where('classname', $classname)->count();
    }

    public function scopeCountStudentsNotInAClass(Builder $query, $classname)
    {
        return $query->whereNot('classname', $classname)->count();
    }
}
