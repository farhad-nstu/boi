<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookPublisher;


class BookPublisherController extends Controller
{
    public function addBookPublisher() {
        return view('admin.category.book.publisher.add-publisher');
    }
    
    public function newBookPublisher(Request $request) {
        
        $bookPublisher = BookPublisher::where('publisher_name', $request->publisher_name)->first();
        
        if(!$bookPublisher) {
            BookPublisher::create($request);
            return back()->with('success', 'Publisher Added Successfully.');        
        } else {
            return back()->with('failed', 'Failed! Publisher Already Exist.');    
        }
        
    }
    public function manageBookPublisher() {
        
        return view('admin.category.book.publisher.manage-publisher', [
            'publishers' => BookPublisher::OrderBy('publisher_name', 'asc')->get(),
        ]);
        
    }
    public function editBookPublisher($id) {
        
        return view('admin.category.book.publisher.edit-publisher', [
            'publisher' => BookPublisher::find($id),
        ]);
        
    }
    public function updateBookPublisher(Request $request) {
        
        BookPublisher::updatePublisher($request);
        return redirect('/manage-book-publisher')->with('success', 'Publisher Update Success.');
        
    }
    public function updateBookPublisherStatus($id) {
        
        $bookPublisher = BookPublisher::find($id);
        
        $statusActive = $bookPublisher->status == 1;
        $statusDeactive = $bookPublisher->status == 0;
        
        if($statusActive) {
            $bookPublisher->status  = 0;
            $bookPublisher->save();
            
        } if($statusDeactive) {
            $bookPublisher->status  = 1;    
            $bookPublisher->save();
        }
        
        return back()->with('success', 'Publisher Update Success.');
        
    }
    public function deleteBookPublisher(Request $request) {
        
        BookPublisher::deletePublisher($request);
        return redirect('/manage-book-publisher')->with('success', 'Publisher delated');
        
    }
}
