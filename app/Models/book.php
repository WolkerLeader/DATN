<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'slug',
        'title',
        'author',
        'painter',
        'book_path',
        'desc',
        'note',
        'is_VIP',
        'is_delete',
        'adult',
        'group_id'
    ];

    public function genre()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function comments()
    {
        return $this->hasMany(BookComment::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
