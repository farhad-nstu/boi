<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookWriter;
use App\BookCategory;
use App\BookLanguage;
use App\BookTag;
use App\BookGenre;
use App\BookPublisher;
use App\Book;
use App\BookImage;
use DB;

class BookController extends Controller
{
    public function addBook() {
        return view('admin.category.book.add-book', [
            'writers'       => BookWriter::where('status' , 1)->get(),
            'categories'    => BookCategory::where('status' , 1)->get(),
            'languages'     => BookLanguage::where('status' , 1)->get(),
            'tags'          => BookTag::where('status' , 1)->get(),
            'genres'        => BookGenre::where('status' , 1)->get(),
            'publishers'    => BookPublisher::where('status' , 1)->get(),
        ]);
    }
    
    public function newBook(Request $request) {
        
        $images = $request->book_images;
        $tags   = explode(",", $request->book_tag_names);

        $bookId = Book::create($request);

        BookTag::create($tags, $bookId);

        if($images) {
            BookImage::create($images, $bookId);
        }

        return back()->with('success', 'New Book Posted Successfully');
            
        
    }
    
    public function manageBook() {
        
        $books = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_writers', 'books.writer_id', '=', 'book_writers.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_genres', 'books.book_genre_id', '=', 'book_genres.id')
            ->join('book_languages', 'books.book_language_id', '=', 'book_languages.id')
            ->select('books.*', 
                     'book_categories.book_category_name',
                     'book_writers.writer_name',
                     'book_publishers.publisher_name',
                     'book_genres.book_genre_name', 
                     'book_languages.book_language_name')
            ->get();
        
        return view('admin.category.book.manage-book', [
            'books'     => $books,
            'tags'      => BookTag::all(),
            'images'    => BookImage::all(),
        ]);
        
    }
    
    public function singleBook($id, $name) {
        
        $books = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_writers', 'books.writer_id', '=', 'book_writers.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_genres', 'books.book_genre_id', '=', 'book_genres.id')
            ->join('book_languages', 'books.book_language_id', '=', 'book_languages.id')
            ->select('books.*', 
                     'book_categories.book_category_name',
                     'book_writers.writer_name',
                     'book_publishers.publisher_name',
                     'book_genres.book_genre_name', 
                     'book_languages.book_language_name')
            ->orderBy('books.book_name', 'asc')
            ->get();
        
       
        return view('admin.category.book.single-book', [
            'book'     => $books->where('id', $id)->first(),
            'tags'      => BookTag::all(),
            'images'    => BookImage::all(),
        ]);
        
    }

    public function editBook($id) {

        $book = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_writers', 'books.writer_id', '=', 'book_writers.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_genres', 'books.book_genre_id', '=', 'book_genres.id')
            ->join('book_languages', 'books.book_language_id', '=', 'book_languages.id')
            ->select('books.*',
                     'book_categories.book_category_name',
                     'book_writers.writer_name',
                     'book_publishers.publisher_name',
                     'book_genres.book_genre_name',
                     'book_languages.book_language_name')
            ->where('books.id', $id)
            ->first();

        return view('admin.category.book.edit-book', [
            'book'          => $book,
            'tags'          => BookTag::where('book_id', $id)->get(),
            'bookImages'    => BookImage::where('book_id', $id)->get(),
            'writers'       => BookWriter::where('status' , 1)->get(),
            'categories'    => BookCategory::where('status' , 1)->get(),
            'languages'     => BookLanguage::where('status' , 1)->get(),
            'genres'        => BookGenre::where('status' , 1)->get(),
            'publishers'    => BookPublisher::where('status' , 1)->get(),
        ]);

    }

    public function updateBook(Request $request) {

        $tags       = explode(",", $request->book_tag_names);
        $bookId     = $request->id;
        $categoryId = $request->category_id;

        $images     = $request->book_images;

        Book::updateBook($request);

        BookTag::updateBookTag($tags, $bookId, $categoryId);

        if($images) {
            BookImage::updateImage($images, $bookId, $categoryId);
        }

        return redirect('/manage-book')->with('success', 'Book Updated Successfully');
    }

    
    public function updateBookStatus($id) {
        
        $book = Book::find($id);
        
        $statusActive = $book->status == 1;
        $statusDeactive = $book->status == 0;
        
        if($statusActive) {
            $book->status  = 0;
            $book->save();
            
        } if($statusDeactive) {
            $book->status  = 1;    
            $book->save();
        }
        
        return back()->with('success', 'Book Status Update Success.');
        
    }
    
    public function deleteBook(Request $request) {

//        return $request;
        $bookId     = $request->id;
        $tags   = BookTag::where('book_id', $request->id)->get();
        $images = BookImage::where('book_id', $request->id)->get();
        
        if($tags) {
            BookTag::deleteTag($tags, $bookId);
        }
        if($images) {
            BookImage::deleteImage($images, $bookId);
        }

        Book::deleteBook($request);
        return redirect('/manage-book')->with('success', 'Book has been delated');
        
    }
}
