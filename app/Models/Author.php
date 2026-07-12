<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
    'name',
    'biography',
    'is_active',
];
public function books()
{
    return $this->belongsToMany(Book::class);
}
}
