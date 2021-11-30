<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Group;

class TeamGroup extends Model
{
    use HasFactory;

    protected $table = 'team_groups';

    protected $fillable = ['group_id', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
