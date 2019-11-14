<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookGenre;

class BookGenreController extends Controller
{
    public function editBookGenre($id) {
        
        return view('admin.category.book.genre.edit-genre', [
            'genre' => BookGenre::find($id),
        ]);
        
    }
    public function updateBookGenre(Request $request) {
        
        BookGenre::updateGenre($request);
        return redirect('/manage-book-option')->with('success', 'Genre Update Success.');
        
    }
    public function updateBookGenreStatus($id) {
        
        $bookGenre = BookGenre::find($id);
        
        $statusActive = $bookGenre->status == 1;
        $statusDeactive = $bookGenre->status == 0;
        
        if($statusActive) {
            $bookGenre->status  = 0;
            $bookGenre->save();
            
        } if($statusDeactive) {
            $bookGenre->status  = 1;    
            $bookGenre->save();
        }
        
        return back()->with('success', 'Genre Update Success.');
        
    }
    public function deleteBookGenre(Request $request) {
        
        BookGenre::deleteGenre($request);
        return redirect('/manage-book-option')->with('success', 'Genre delated');
        
    }
}
