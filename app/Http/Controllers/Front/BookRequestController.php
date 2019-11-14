<?php

namespace App\Http\Controllers\Front;

use App\BookRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BookRequestController extends Controller
{
    public function requestBook(Request $request) {

        BookRequest::create($request);
        return back()->with('alert', 'Book request has been submited to Donor');

    }
    public function manageBookRequest() {

        $bookRequests = DB::table('book_requests')
            ->join('books', 'book_requests.book_id', '=', 'books.id')
            ->join('users', 'book_requests.user_id', '=', 'users.id')
            ->select('book_requests.*',
                'books.book_name',
                'books.book_cover',
                'users.name',
                'users.mobile')
            ->get();

//        return $bookRequests;

        return view('admin.category.book.book-request.manage-book-request', [
            'bookRequests' => $bookRequests
        ]);

    }
}
