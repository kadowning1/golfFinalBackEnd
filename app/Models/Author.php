<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookAuthor;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function authorsBooks()
    {
        return $this->hasMany(BookAuthor::class);
    }
}
