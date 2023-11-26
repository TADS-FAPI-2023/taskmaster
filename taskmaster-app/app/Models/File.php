<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $fillable = ['filename','description','tasks_id'];
}
