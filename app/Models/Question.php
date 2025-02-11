<?php

namespace App\Models;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory, HasUlids;

    protected $guarded = [];
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
