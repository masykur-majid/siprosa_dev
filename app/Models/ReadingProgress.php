<?php

namespace App\Models;

use Illuminate\Console\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable('student_id', 'book_id', 'status', 'current_page', 'started_at')]



class ReadingProgress extends Model
{
    public function students(): BelongsTo
    {
        return $this->BelongsTo(Student::class, 'student_id', 'id');
    }

    public function books(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
    
    
    public function updateProgress(int $lastPageRead): void
    {
        $this->current_page = $lastPageRead;
        
        if($this->current_page >= $this->books->total_pages){
            $this->status = 'finished';
        }else{
            $this->status = 'reading';
        }
        
        $this->save();
    }
}
