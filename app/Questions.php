<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = ['title', 'answer', 'point'];
    protected $hidden = ['answer', 'point'];

    public function survey()
    {
        return $this->belongsTo(Surveys::class);
    }

    public function answers()
    {
        return $this->hasMany(Answers::class);
    }

    protected $table = 'questions';

}
