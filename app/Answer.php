<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'id',
        'description',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
