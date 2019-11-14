<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookLanguage;

class BookLanguageController extends Controller
{
    public function editBookLanguage($id) {
        
        return view('admin.category.book.language.edit-language', [
            'language' => BookLanguage::find($id),
        ]);
        
    }
    public function updateBookLanguage(Request $request) {
        
        BookLanguage::updateLanguage($request);
        return redirect('/manage-book-option')->with('success', 'Language Update Success.');
        
    }
    public function updateBookLanguageStatus($id) {
        
        $bookLanguage = BookLanguage::find($id);
        
        $statusActive = $bookLanguage->status == 1;
        $statusDeactive = $bookLanguage->status == 0;
        
        if($statusActive) {
            $bookLanguage->status  = 0;
            $bookLanguage->save();
            
        } if($statusDeactive) {
            $bookLanguage->status  = 1;    
            $bookLanguage->save();
        }
        
        return back()->with('success', 'Language Update Success.');
        
    }
    public function deleteBookLanguage(Request $request) {
        
        BookLanguage::deleteLanguage($request);
        return redirect('/manage-book-option')->with('success', 'Language delated');
        
    }
}
