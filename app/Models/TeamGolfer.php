<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Golfer;

class TeamGolfer extends Model
{
    use HasFactory;

    protected $table = 'team_golfers';

    protected $fillable = ['team_id', 'golfer_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function role()
    {
        return $this->belongsTo(Golfer::class);
    }
}
