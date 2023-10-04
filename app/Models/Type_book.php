<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Book;

class Type_book extends Model
{
    use HasFactory;
    protected $Table = 'type_books'; 
    public function book(): HasMany
    {
        return $this->HasMany(Book::class,'id_type','id');
    }
}
