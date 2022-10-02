<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam1 extends Model
{
    protected $fillable = ['team_id', 'first_question', 'second_question','third_question','fourth_question','exam_1_point'];

    
}
