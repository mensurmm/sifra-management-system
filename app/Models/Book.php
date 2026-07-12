<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $fillable = [

    'category_id',

    'publisher_id',

    'isbn',

    'title',

    'edition',

    'publication_year',

    'language',

    'description',

    'is_active'
];
protected $casts = [
        'is_active' => 'boolean',
    ];
public function category()
{
    return $this->belongsTo(BookCategory::class,'category_id');
}

public function publisher()
{
    return $this->belongsTo(Publisher::class);
}

public function authors()
{
    return $this->belongsToMany(Author::class);
}
public function copies()
{
    return $this->hasMany(BookCopy::class);
}
}
