<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamneses extends Model
{
    protected $fillable = [
        'id',
        'anamnese',
        'answers_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function answer()
    {
        return $this->hasOne('App\Answer', 'id', 'answers_id');
    }

}
