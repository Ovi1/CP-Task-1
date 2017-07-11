<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    public $timestamps = false;
    protected $fillable = ['answer', 'questions_id'];

    public function questions()
    {
        return $this->belongsTo(Questions::class);
    }

    protected $table = 'answers';
}
