<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Book extends Model
{
    protected $fillable = [
        'user_id','category_id', 'book_category_id', 'writer_id', 'publisher_id', 'book_genre_id', 'book_language_id', 'book_name', 'book_details', 'book_cover', 'book_video', 'hit_count', 'circle_count', 'verified', 'assigned', 'status',
    ];
    
    public static function create($request) {
        
        $book = new Book();
        
        $book->user_id              = Auth::user()->id;
        $book->category_id          = $request->category_id;
        $book->book_category_id     = $request->book_category_id;
        $book->writer_id            = $request->writer_id;
        $book->publisher_id         = $request->publisher_id;
        $book->book_genre_id        = $request->book_genre_id;
        $book->book_language_id     = $request->book_language_id;
        $book->book_name            = $request->book_name;
        $book->book_details         = $request->book_details;
        $book->status               = $request->status;
        
        $cover = $request->book_cover;
        
        if($cover) {

            $random = mt_rand(10000, 99999);

            $imageName  = $random.'1'.'.'.$cover->getClientOriginalExtension();
            $directory  = 'upload/front/book/book_cover/';
            $cover->move($directory, $imageName);
            $book->book_cover  = $directory.$imageName;
        }
        
        $book->save();
        
        return $book->id;
    }

    public static function updateBook($request) {

        $book = Book::find($request->id);

        $book->book_category_id     = $request->book_category_id;
        $book->writer_id            = $request->writer_id;
        $book->publisher_id         = $request->publisher_id;
        $book->book_genre_id        = $request->book_genre_id;
        $book->book_language_id     = $request->book_language_id;
        $book->book_name            = $request->book_name;
        $book->book_details         = $request->book_details;
        $book->status               = $request->status;

        $cover = $request->book_cover;

        if($cover) {

            if(file_exists($book->book_cover)) {
                unlink($book->book_cover);
            }

            $random = mt_rand(10000, 99999);

            $imageName  = $random.'1'.'.'.$cover->getClientOriginalExtension();
            $directory  = 'upload/front/book/book_cover/';
            $cover->move($directory, $imageName);
            $book->book_cover  = $directory.$imageName;
        }

        $book->save();
    }
    
    public static function deleteBook($request) {
        
        $book = Book::where('id', $request->id)->first();
        
        if(file_exists($book->book_cover)) {
            unlink($book->book_cover);
        }
                
        $book->delete();
    }
}
