<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveys extends Model
{
    protected $fillable = ['type'];

    public function questions()
    {
        return $this->hasMany(Questions::class);
    }

    protected $table = 'surveys';
}
