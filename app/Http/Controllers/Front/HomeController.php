<?php

namespace App\Http\Controllers\Front;

use App\Book;
use App\BookCategory;
use App\BookImage;
use App\BookPublisher;
use App\BookTag;
use App\BookWriter;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index() {
        return view('front.home.home', [
            'books' => Book::take('8')->get(),
        ]);
    }

    public function bookDetail($id, $name) {

        $books = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_writers', 'books.writer_id', '=', 'book_writers.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_genres', 'books.book_genre_id', '=', 'book_genres.id')
            ->join('book_languages', 'books.book_language_id', '=', 'book_languages.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->select('books.*',
                'book_categories.book_category_name',
                'book_writers.writer_name',
                'book_publishers.publisher_name',
                'book_genres.book_genre_name',
                'book_languages.book_language_name',
                'users.name')
            ->where('books.id', '=', $id)
            ->first();

        $allBooks = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_writers', 'books.writer_id', '=', 'book_writers.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_genres', 'books.book_genre_id', '=', 'book_genres.id')
            ->join('book_languages', 'books.book_language_id', '=', 'book_languages.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->select('books.*',
                'book_categories.book_category_name',
                'book_writers.writer_name',
                'book_publishers.publisher_name',
                'book_genres.book_genre_name',
                'book_languages.book_language_name',
                'users.name')
            ->where('books.verified', '=', 1)
            ->get();

        return view('front.book.book-detail', [
            'book'      => $books,
            'allBooks'  => $allBooks,
            'bookImages'  => BookImage::all(),
        ]);
    }
    public function writerDetail($id, $name) {

        $books = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_writers', 'books.writer_id', '=', 'book_writers.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_genres', 'books.book_genre_id', '=', 'book_genres.id')
            ->join('book_languages', 'books.book_language_id', '=', 'book_languages.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->select('books.*',
                'book_categories.book_category_name',
                'book_writers.writer_name',
                'book_publishers.publisher_name',
                'book_genres.book_genre_name',
                'book_languages.book_language_name',
                'users.name')
            ->where('books.writer_id', '=', $id)
            ->paginate(12);


        return view('front.book.booksByWriter', [
            'books'      => $books,
            'writer'     => BookWriter::where('id', $id)->first(),
        ]);
    }

    public function publisherDetail($id, $name) {

        $books = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_writers', 'books.writer_id', '=', 'book_writers.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_genres', 'books.book_genre_id', '=', 'book_genres.id')
            ->join('book_languages', 'books.book_language_id', '=', 'book_languages.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->select('books.*',
                'book_categories.book_category_name',
                'book_writers.writer_name',
                'book_publishers.publisher_name',
                'book_genres.book_genre_name',
                'book_languages.book_language_name',
                'users.name')
            ->where('books.publisher_id', '=', $id)
            ->paginate(12);


        return view('front.book.booksByPublisher', [
            'books'      => $books,
            'publisher'     => BookPublisher::where('id', $id)->first(),
        ]);
    }

    public function categoryDetail($id, $name) {

        $books = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_writers', 'books.writer_id', '=', 'book_writers.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_genres', 'books.book_genre_id', '=', 'book_genres.id')
            ->join('book_languages', 'books.book_language_id', '=', 'book_languages.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->select('books.*',
                'book_categories.book_category_name',
                'book_writers.writer_name',
                'book_publishers.publisher_name',
                'book_genres.book_genre_name',
                'book_languages.book_language_name',
                'users.name')
            ->where('books.book_category_id', '=', $id)
            ->paginate(12);


        return view('front.book.booksByCategory', [
            'books'      => $books,
            'category'   => BookCategory::where('id', $id)->first(),
        ]);
    }

    public function writers() {
        return view('front.book.writer.writers', [
            'allWriters' => BookWriter::paginate(16)
        ]);
    }
    public function pulishers() {
        return view('front.book.publisher.publishers', [
            'allPublishers' => BookPublisher::paginate(16)
        ]);
    }
    public function categories() {
        return view('front.book.category.categories', [
            'allCategories' => BookCategory::paginate(16)
        ]);
    }
}
