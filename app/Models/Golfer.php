<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamGolfer;

class Golfer extends Model
{
    use HasFactory;

    protected $fillable = ['golfer_id', 'team_id'];

    public function userRole()
    {
        return $this->hasOne(TeamGolfer::class);
    }
}
