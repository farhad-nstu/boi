<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTag extends Model
{
    protected $fillable = [
        'category_id', 'book_id', 'book_tag_name', 'status',
    ];
    
    public static function create($tags, $bookId) {
        
        $book = Book::where('id', $bookId)->first();
        
        foreach ($tags as $key => $tag) {
            
            $bookTag = new BookTag();
            
            $bookTag->category_id        = $book->category_id;
            $bookTag->book_id            = $bookId;
            $bookTag->book_tag_name      = $tag;
            $bookTag->status             = 1;
            $bookTag->save();
        }
    }
    
    public static function updateBookTag($tags, $bookId, $categoryId) {

        $oldTags  = BookTag::where('book_id' , $bookId)->get();

        foreach ($oldTags as $key => $oldTag) {
            $bookTag = BookTag::where('book_id' , $bookId)->first();
            $bookTag->delete();
        }

        foreach ($tags as $key => $tag) {

            $bookTag = new BookTag();

            $bookTag->category_id        = $categoryId;
            $bookTag->book_id            = $bookId;
            $bookTag->book_tag_name      = $tag;
            $bookTag->status             = 1;
            $bookTag->save();
        }

    }
   
    public static function deleteTag($tags, $bookId) {
        
        foreach ($tags as $key => $tag) {
            
            $bookTag = BookTag::where('book_id', $bookId)->first();
            $bookTag->delete();
            
        }
        
    }
}
