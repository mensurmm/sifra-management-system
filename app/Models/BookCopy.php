<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookCopy extends Model
{
    protected $fillable = [
    'book_id',
    'barcode',
    'shelf_location',
    'status'
];

public function book()
{
    return $this->belongsTo(Book::class);
}
}
