<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRequest extends Model
{
    protected $fillable = [
        'user_id', 'book_id','category_id','message', 'status',
    ];

    public static function create($request) {
        $bookRequest = new BookRequest();
        $bookRequest->user_id       = $request->user_id;
        $bookRequest->book_id       = $request->book_id;
        $bookRequest->category_id   = $request->category_id;
        $bookRequest->message       = $request->message;
        $bookRequest->save();
    }
}
