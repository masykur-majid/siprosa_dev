<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

#[Fillable('reading_progress_id', 'read_date', 'total_pages_read', 'last_page_read', 'notes')]
class ReadingLog extends Model
{
    public function scopeGetReadingLogs(Builder $query, $readingProgressID)
    {
        return $query->where('reading_progress_id',$readingProgressID)
                     ->orderBy('read_date', 'desc');
    }
}
