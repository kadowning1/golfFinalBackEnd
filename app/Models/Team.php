<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TeamGolfer;
use App\Models\TeamScore;
use App\Models\User;
use App\Models\Group;


class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function teamGolfers()
    {
        return $this->hasMany(TeamGolfer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teamScore()
    {
        return $this->hasOne(TeamScore::class);
    }
}
