<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable('class_name', 'vocational')]

class ClassList extends Model
{
    
    protected $primaryKey = 'class_name';
    protected $keyType = 'string';
    public $incrementing = false;

    public function vocations(): BelongsTo
    {
        return $this->belongsTo(Vocation::class, 'vocational', 'vocation_code');
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'classname', 'class_name');
    }

    
}
