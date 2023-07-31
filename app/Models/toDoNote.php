<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toDoNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'is_done'
    ];
}
