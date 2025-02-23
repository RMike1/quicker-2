<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models\Question;
use App\Models\Answer;

class Level extends Model
{
    use HasUlids;
    protected $guarded = [];
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function answers(){
        return $this->hasManyThrough(Answer::class,Question::class);
    }
}