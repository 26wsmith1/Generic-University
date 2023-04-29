<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'grade', 'comments',
    ];

    public function user()
    {
        return $this->belongsTo('App\grades');
    }


    public function uniClass()
    {
        return $this->belongsTo('App\UniClass');
    }
}
