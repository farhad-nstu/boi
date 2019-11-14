<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookGenre;
use App\BookLanguage; 
use App\BookTag;

class BookOptionController extends Controller
{
    public function addBookOption() {
        return view('admin.category.book.option.add-option');
    }
    
    public function newBookOption(Request $request) {
        
        $hasGenre      = $request->book_genre_name;
        $hasLanguage   = $request->book_language_name;
        
        $bookGenre = BookGenre::where('book_genre_name', $request->book_genre_name)->first();
        $bookLanguage = BookLanguage::where('book_language_name', $request->book_language_name)->first();
        
        if($hasGenre && !$bookGenre) {
            BookGenre::create($request);
            return back()->with('success', 'Genre Added Successfully.');  
        }
        
        if($hasLanguage && !$bookLanguage) {
            BookLanguage::create($request);
            return back()->with('success', 'Language Added Successfully.'); 
        }

        
//        Error Message
        if($bookGenre) {
            return back()->with('failed-bookGenre', 'Failed! Genre Already Exist.');     
        }if($bookLanguage) {
            return back()->with('failed-bookLanguage', 'Failed! Language Already Exist.');     
        }
        
        
    }
    public function manageBookOption() {
        
        return view('admin.category.book.option.manage-option', [
            'genres'      => BookGenre::OrderBy('book_genre_name', 'asc')->get(),
            'languages'   => BookLanguage::OrderBy('book_language_name', 'asc')->get(),
            'tags'        => BookTag::OrderBy('book_tag_name', 'asc')->get(),
            'tagBooks'    => Book::all(),
            'tagUsers'    => User::all(),
        ]);
        
    }
    public function editBookOption($id) {
        
        return view('admin.category.book.category.edit-category', [
            'category' => BookCategory::find($id),
        ]);
        
    }
    public function updateBookOption(Request $request) {
        
        BookCategory::updateOption($request);
        return redirect('/manage-book-category')->with('success', 'Category Update Success.');
        
    }
    public function updateBookOptionStatus($id) {
        
        $bookCategory = BookCategory::find($id);
        
        $statusActive = $bookCategory->status == 1;
        $statusDeactive = $bookCategory->status == 0;
        
        if($statusActive) {
            $bookCategory->status  = 0;
            $bookCategory->save();
            
        } if($statusDeactive) {
            $bookCategory->status  = 1;    
            $bookCategory->save();
        }
        
        return back()->with('success', 'Category Update Success.');
        
    }
    public function deleteBookOption(Request $request) {
        
        BookCategory::deleteOption($request);
        return redirect('/manage-book-category')->with('success', 'Category delated');
        
    }
}
