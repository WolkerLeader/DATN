<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookcomment extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'user_id',
        'content',
        'parent_id'
        ];

}
