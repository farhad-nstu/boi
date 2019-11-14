<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $fillable = [
        'category_id', 'book_category_name', 'status',
    ];
    
    public static function create($request) {
        
        $bookCategory = new BookCategory();
        $bookCategory->category_id        = $request->category_id;
        $bookCategory->book_category_name = $request->book_category_name;
        $bookCategory->status             = 1;
    
        
        $bookCategory->save();
    }
    
    public static function updateCategory($request) {
        
        $bookCategory = BookCategory::where('id', $request->id)->first();
        
        $bookCategory->category_id             = $request->category_id;
        $bookCategory->book_category_name      = $request->book_category_name;
        $bookCategory->status                  = $request->status;
        $bookCategory->save();
    }
    public static function updateCategoryStatus($request) {
        
        $bookCategory             = BookCategory::where('id', $request->id)->first();
        
        if($bookCategory->status    == 1) {
            $bookCategory->status   = 0;    
        } 
        
        if($bookCategory->status    == 0) {
            $bookCategory->status   = 1;    
        }
                
        $bookCategory->save();
    }
    
    public static function deleteCategory($request) {
        
        $bookCategory = BookCategory::where('id', $request->id)->first();   
        $bookCategory->delete();
    }
}
