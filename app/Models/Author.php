<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Book;

class Author extends Model
{
    use HasFactory;
    protected $table="authors";
    public function book(): HasMany{
        return $this->hasMany(Book::class,'id_authors','id');
    }
}
