<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'image',
        'author_id',
    ];

    // Relazione con l'autore
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
