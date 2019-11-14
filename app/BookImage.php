<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookImage extends Model
{
    protected $fillable = [
        'category_id', 'book_id', 'book_image', 'status',
    ];
    
    public static function create($images, $bookId) {
        
        $book = Book::where('id', $bookId)->first();
        
        foreach ($images as $key => $image) {
            
            $bookImage = new BookImage();
            
            $random = mt_rand(10000, 99999);

            $imageName  = $random.'1'.'.'.$image->getClientOriginalExtension();
            $directory  = 'upload/front/book/book_image/';
            $image->move($directory, $imageName);
            
            $bookImage->category_id        = $book->category_id;
            $bookImage->book_id            = $bookId;
            $bookImage->book_image         = $directory.$imageName;
            $bookImage->status               = 1;
            $bookImage->save();
            
        }
    }

    public static function updateImage($images, $bookId, $categoryId) {

        $bookImageFounds = BookImage::where('book_id', $bookId)->get();

        foreach ($bookImageFounds as $key => $bookImageFound) {

            if(file_exists($bookImageFound->book_image)) {
                unlink($bookImageFound->book_image);
            }
        }

        foreach ($images as $key => $image) {

            $bookImage = new BookImage();

            $random = mt_rand(10000, 99999);

            $imageName  = $random.'1'.'.'.$image->getClientOriginalExtension();
            $directory  = 'upload/front/book/book_image/';
            $image->move($directory, $imageName);

            $bookImage->category_id        = $categoryId;
            $bookImage->book_id            = $bookId;
            $bookImage->book_image         = $directory.$imageName;
            $bookImage->status               = 1;
            $bookImage->save();

        }
    }
    
    public static function deleteImage($images, $bookId) {
        
        foreach ($images as $key => $image) {
            
            $bookImage = BookImage::where('book_id', $bookId)->first();
            
            if(file_exists($bookImage->book_image)) {
                unlink($bookImage->book_image);
            }

            $bookImage->delete();
            
        }
        
    }
}
