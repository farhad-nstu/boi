<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookLanguage extends Model
{
    protected $fillable = [
        'category_id', 'book_language_name', 'status',
    ];
    
    public static function create($request) {
        
        $bookLanguage = new BookLanguage();
        $bookLanguage->category_id        = $request->category_id;
        $bookLanguage->book_language_name = $request->book_language_name;
        $bookLanguage->status             = 1;
    
        
        $bookLanguage->save();
    }
    
    public static function updateLanguage($request) {
        
        $bookLanguage = BookLanguage::where('id', $request->id)->first();
        
        $bookLanguage->category_id             = $request->category_id;
        $bookLanguage->book_language_name      = $request->book_language_name;
        $bookLanguage->status                  = $request->status;
        $bookLanguage->save();
    }
 
    public static function deleteLanguage($request) {
        
        $bookLanguage = BookLanguage::where('id', $request->id)->first();   
        $bookLanguage->delete();
    }
}
