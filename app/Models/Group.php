<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function userGroups()
    {
        return $this->hasMany(UserGroup::class);
    }
}
