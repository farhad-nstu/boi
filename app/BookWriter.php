<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookWriter extends Model
{
    protected $fillable = [
        'category_id', 'writer_name','writer_details', 'writer_image','status',
    ];
    
    public static function create($request) {
        
        $bookWriter = new BookWriter();
        $bookWriter->category_id        = $request->category_id;
        $bookWriter->writer_name        = $request->writer_name;
        $bookWriter->writer_details     = $request->writer_details;
        $bookWriter->status             = 1;
    
        $bookWriterImage   = $request->writer_image;
        
        if($bookWriterImage) {

                $random = mt_rand(10000, 99999);

                $imageName  = $random.'1'.'.'.$bookWriterImage->getClientOriginalExtension();
                $directory  = 'upload/front/book/writer_image/';
                $bookWriterImage->move($directory, $imageName);
                $bookWriter->writer_image    = $directory.$imageName;
                
        }
        
        $bookWriter->save();
    }
    
    public static function updateWriter($request) {
        
        $bookWriter = BookWriter::where('id', $request->id)->first();
        
        $bookWriter->category_id        = $request->category_id;
        $bookWriter->writer_name        = $request->writer_name;
        $bookWriter->writer_details     = $request->writer_details;
        $bookWriter->status             = $request->status;
    
        $bookWriterImage   = $request->writer_image;
        
        if($bookWriterImage) {
            
                if(file_exists($bookWriter->writer_image)) {
                    unlink($bookWriter->writer_image);
                }

                $random = mt_rand(10000, 99999);

                $imageName  = $random.'1'.'.'.$bookWriterImage->getClientOriginalExtension();
                $directory  = 'upload/front/book/writer_image/';
                $bookWriterImage->move($directory, $imageName);
                $bookWriter->writer_image    = $directory.$imageName;
                
        }
        
        $bookWriter->save();
    }
   
    public static function deleteWriter($request) {
        
        $bookWriter = BookWriter::where('id', $request->id)->first();
        
        if(file_exists($bookWriter->writer_image)) {
            unlink($bookWriter->writer_image);
        }
                
        $bookWriter->delete();
    }
}
