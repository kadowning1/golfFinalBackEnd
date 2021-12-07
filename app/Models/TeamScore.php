<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class TeamScore extends Model
{
    use HasFactory;

    protected $table = 'team_scores';

    protected $fillable = ['datetime', 'score', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
