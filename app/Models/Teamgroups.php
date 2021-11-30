<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teamgroups extends Model
{
    use HasFactory;

    protected $table = 'teamgroups';

    protected $fillable = ['groups_id', 'teams_id'];

    public function user()
    {
        return $this->belongsTo(Teams::class);
    }

    public function role()
    {
        return $this->belongsTo(Groups::class);
    }
}
