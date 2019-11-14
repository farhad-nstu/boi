<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookTag;

class BookTagController extends Controller
{
    public function editBookTag($id) {
        
        return view('admin.category.book.tag.edit-tag', [
            'tag' => BookTag::find($id),
        ]);
        
    }
    public function updateBookTag(Request $request) {
        
        BookTag::updateTag($request);
        return redirect('/manage-book-option')->with('success', 'Tag Update Success.');
        
    }
    public function updateBookTagStatus($id) {
        
        $bookTag = BookTag::find($id);
        
        $statusActive = $bookTag->status == 1;
        $statusDeactive = $bookTag->status == 0;
        
        if($statusActive) {
            $bookTag->status  = 0;
            $bookTag->save();
            
        } if($statusDeactive) {
            $bookTag->status  = 1;    
            $bookTag->save();
        }
        
        return back()->with('success', 'Tag Update Success.');
        
    }
    public function deleteBookTag(Request $request) {
        
        BookTag::deleteTag($request);
        return redirect('/manage-book-option')->with('success', 'Tag delated');
        
    }
}
