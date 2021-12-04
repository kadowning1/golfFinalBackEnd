<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamGroup;
use App\Models\TeamGolfer;
use App\Models\TeamScore;
use App\Models\User;


class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'creator'];

    public function teamGroup()
    {
        return $this->hasOne(TeamGroup::class);
    }

    public function teamGolferTeam()
    {
        return $this->hasOne(TeamGolfer::class);
    }

    public function teamUser()
    {
        return $this->hasOne(User::class);
    }

    public function teamScore()
    {
        return $this->belongsTo(TeamScore::class);
    }
}
