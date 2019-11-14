<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookGenre extends Model
{
    protected $fillable = [
        'category_id', 'book_genre_name', 'status',
    ];
    
    public static function create($request) {
        
        $bookGenre = new BookGenre();
        $bookGenre->category_id        = $request->category_id;
        $bookGenre->book_genre_name = $request->book_genre_name;
        $bookGenre->status             = 1;
    
        
        $bookGenre->save();
    }
    
    public static function updateGenre($request) {
        
        $bookGenre = BookGenre::where('id', $request->id)->first();
        
        $bookGenre->category_id             = $request->category_id;
        $bookGenre->book_genre_name      = $request->book_genre_name;
        $bookGenre->status                  = $request->status;
        $bookGenre->save();
    }
   
    
    public static function deleteGenre($request) {
        
        $bookGenre = BookGenre::where('id', $request->id)->first();   
        $bookGenre->delete();
    }
}
