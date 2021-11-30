<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamGroup;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'creator'];

    public function teamGroup()
    {
        return $this->hasOne(TeamGroup::class);
    }
}
