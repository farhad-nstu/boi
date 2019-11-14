<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookPublisher extends Model
{
    protected $fillable = [
        'category_id', 'publisher_name','publisher_image','publisher_details', 'status',
    ];
    
    public static function create($request) {
        
        $bookPublisher = new BookPublisher();
        $bookPublisher->category_id        = $request->category_id;
        $bookPublisher->publisher_name        = $request->publisher_name;
        $bookPublisher->publisher_details     = $request->publisher_details;
        $bookPublisher->status             = 1;
    
        $bookPublisherImage   = $request->publisher_image;
        
        if($bookPublisherImage) {

                $random = mt_rand(10000, 99999);

                $imageName  = $random.'1'.'.'.$bookPublisherImage->getClientOriginalExtension();
                $directory  = 'upload/front/book/publisher_image/';
                $bookPublisherImage->move($directory, $imageName);
                $bookPublisher->publisher_image    = $directory.$imageName;
                
        }
        
        $bookPublisher->save();
    }
    
    public static function updatePublisher($request) {
        
        $bookPublisher = BookPublisher::where('id', $request->id)->first();
        
        $bookPublisher->category_id             = $request->category_id;
        $bookPublisher->publisher_name          = $request->publisher_name;
        $bookPublisher->publisher_details       = $request->publisher_details;
        $bookPublisher->status                  = $request->status;
    
        $bookPublisherImage   = $request->publisher_image;
        
        if($bookPublisherImage) {
            
                if(file_exists($bookPublisher->publisher_image)) {
                    unlink($bookPublisher->publisher_image);
                }

                $random = mt_rand(10000, 99999);

                $imageName  = $random.'1'.'.'.$bookPublisherImage->getClientOriginalExtension();
                $directory  = 'upload/front/book/publisher_image/';
                $bookPublisherImage->move($directory, $imageName);
                $bookPublisher->publisher_image    = $directory.$imageName;
                
        }
        
        $bookPublisher->save();
    }
    
    public static function deletePublisher($request) {
        
        $bookPublisher = BookPublisher::where('id', $request->id)->first();
        
        if(file_exists($bookPublisher->publisher_image)) {
            unlink($bookPublisher->publisher_image);
        }
                
        $bookPublisher->delete();
    }
}
