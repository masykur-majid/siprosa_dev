<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable('vocation_code', 'vocation_name')]
class Vocation extends Model
{
    protected $primaryKey = 'vocation_code';
    protected $keyType = 'string';
    public $incrementing = false;
}