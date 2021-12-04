<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamGroup;
use App\Models\User;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'creator'];

    public function groupTeam()
    {
        return $this->hasOne(TeamGroup::class);
    }

    public function groupUser()
    {
        return $this->hasOne(User::class);
    }
}
