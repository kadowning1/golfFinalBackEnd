<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Book;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = ['return_date', 'checked_out', 'user_id'];

    //need to establish connection

    public function whichUser()
    {
        return $this->belongsTo(User::class);
    }

    public function whichBook()
    {
        return $this->belongsTo(Book::class);
    }
}
