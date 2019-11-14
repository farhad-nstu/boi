<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookWriter;

class BookWriterController extends Controller
{
    public function addBookWriter() {
        return view('admin.category.book.writer.add-writer');
    }
    
    public function newBookWriter(Request $request) {
        
        $bookWriter = BookWriter::where('writer_name', $request->writer_name)->first();
        
        if(!$bookWriter) {
            BookWriter::create($request);
            return back()->with('success', 'Write Added Successfully.');        
        } else {
            return back()->with('failed', 'Failed! Write Already Exist.');    
        }
        
    }
    public function manageBookWriter() {
        
        return view('admin.category.book.writer.manage-writer', [
            'writers' => BookWriter::OrderBy('writer_name', 'asc')->get(),
        ]);
        
    }
    public function editBookWriter($id) {
        
        return view('admin.category.book.writer.edit-writer', [
            'writer' => BookWriter::find($id),
        ]);
        
    }
    public function updateBookWriter(Request $request) {
        
        BookWriter::updateWriter($request);
        return redirect('/manage-book-writer')->with('success', 'Writer Update Success.');
        
    }
    public function updateBookWriterStatus($id) {
        
        $bookWriter = BookWriter::find($id);
        
        $statusActive = $bookWriter->status == 1;
        $statusDeactive = $bookWriter->status == 0;
        
        if($statusActive) {
            $bookWriter->status  = 0;
            $bookWriter->save();
            
        } if($statusDeactive) {
            $bookWriter->status  = 1;    
            $bookWriter->save();
        }
        
        return back()->with('success', 'Writer Update Success.');
        
    }
    public function deleteBookWriter(Request $request) {
        
        BookWriter::deleteWriter($request);
        return redirect('/manage-book-writer')->with('success', 'Writer delated');
        
    }
}
