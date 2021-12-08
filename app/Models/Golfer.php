<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamGolfer;

class Golfer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'score', 'country', 'position', 'total_to_par'];

    // public function teamGolfer()
    // {
    //     return $this->hasMany(TeamGolfer::class);
    // }
}
