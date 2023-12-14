<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    public function bookshelfs(): BelongsTo{
        return $this->belongsTo(Bookshelf::class);
    }

    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'quantity',
        'cover',
        'bookshelf_id'
    ];
    public static function getDataBook(){
        $book = Book::all();
        $book_filtur = [];

        $no = 1;
        for ($i=0; $i<$book->count(); $i++){
            $book_filtur[$i]['no'] = $no++;
            $book_filtur[$i]['title'] = $book[$i]->title;
            $book_filtur[$i]['author'] = $book[$i]->author;
            $book_filtur[$i]['year'] = $book[$i]->year;
            $book_filtur[$i]['publihser'] = $book[$i]->publisher;
        }
        return $book_filtur;
    }
}
