<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamGolfer;

class Golfer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'role_id'];

    public function userRole()
    {
        return $this->hasOne(TeamGolfer::class);
    }
}
