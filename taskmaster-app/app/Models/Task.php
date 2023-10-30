<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'name',
        'type',
        'project_id',
        'description',
        'finished',
        'start_date',
        'end_date',
        'time_limit',
        'difficulty',
    ];
}
