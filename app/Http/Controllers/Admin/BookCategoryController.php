<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookCategory;

class BookCategoryController extends Controller
{
    public function addBookCategory() {
        return view('admin.category.book.category.add-category');
    }
    
    public function newBookCategory(Request $request) {
        
        $bookCategory = BookCategory::where('book_category_name', $request->book_category_name)->first();
        
        if(!$bookCategory) {
            BookCategory::create($request);
            return back()->with('success', 'Category Added Successfully.');        
        } else {
            return back()->with('failed', 'Failed! Category Already Exist.');    
        }
        
    }
    public function manageBookCategory() {
        
        return view('admin.category.book.category.manage-category', [
            'categories' => BookCategory::OrderBy('book_category_name', 'asc')->get(),
        ]);
        
    }
    public function editBookCategory($id) {
        
        return view('admin.category.book.category.edit-category', [
            'category' => BookCategory::find($id),
        ]);
        
    }
    public function updateBookCategory(Request $request) {
        
        BookCategory::updateCategory($request);
        return redirect('/manage-book-category')->with('success', 'Category Update Success.');
        
    }
    public function updateBookCategoryStatus($id) {
        
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
    public function deleteBookCategory(Request $request) {
        
        BookCategory::deleteCategory($request);
        return redirect('/manage-book-category')->with('success', 'Category delated');
        
    }
}
