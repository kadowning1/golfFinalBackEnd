<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamGroup;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function groupTeam()
    {
        return $this->hasOne(TeamGroup::class);
    }
}
