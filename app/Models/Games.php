<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    protected $fillable = ['team_id', 'game_1', 'game_2','game_3','game_4','game_5','game_6','game_7','game_8','game_9','total_games_point'];
    protected $primaryKey = 'team_id';


}
