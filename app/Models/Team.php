<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $fillable = ['id', 'email', 'password'];
    public $incrementing = false;

}
