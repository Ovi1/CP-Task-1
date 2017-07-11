<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    protected $table = 'results';
    protected $fillable = ['surveys_id', 'url', 'name', 'surname', 'answers'];
}
