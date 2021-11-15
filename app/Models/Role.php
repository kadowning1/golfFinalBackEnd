<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\UserRole;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function roleUser()
    {
        return $this->hasOne(UserRole::class);
    }
}
