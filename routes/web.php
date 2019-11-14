<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/chat', 'HomeController@index')->name('home.chat');
Route::get('/userlist', 'MessageController@user_list')->name('user.list');
Route::get('/usermessage/{id}', 'MessageController@user_message')->name('user.message');
Route::post('/sendmessage', 'MessageController@send_message')->name('user.message.send');
Route::get('/deletesinglemessage/{id}', 'MessageController@delete_single_message')->name('user.message.delete.single');
Route::get('/deleteallmessage/{id}', 'MessageController@delete_all_message')->name('user.message.delete.all');






//boichakra


//User Register

    Route::get('/user-register',[
        'uses'  => 'Front\UserController@userRegister',
        'as'    => 'user-register'
    ]);
    Route::get('/manage-user',[
        'uses'  => 'Front\UserController@manageUser',
        'as'    => 'manage-user'
    ]);

Route::get('/',[
    'uses' => 'Front\HomeController@index',
    'as' => '/'
]);

Route::group(['middleware' => 'auth'], function () {
    
    
    
});


    
     Route::get('/admin/home', 'HomeController@index')->name('home');


    



    
//    Category
    
    Route::get('/add-category',[
        'uses'  => 'Admin\CategoryController@addCategory',
        'as'    => 'add-category'
    ]);
    
    
    
//    Book    
    Route::get('/add-book',[
        'uses'  => 'Admin\BookController@addBook',
        'as'    => 'add-book'
    ]);
    
    Route::post('/new-book', [
        'uses'  => 'Admin\BookController@newBook',
        'as'    => 'new-book'
    ]);
    
    Route::post('/update-book', [
        'uses'  => 'Admin\BookController@updateBook',
        'as'    => 'update-book'
    ]);
    Route::get('/update-book-status/{id}', [
        'uses'  => 'Admin\BookController@updateBookStatus',
        'as'    => 'update-book-status'
    ]);
    
    Route::get('/manage-book',[
        'uses'  => 'Admin\BookController@manageBook',
        'as'    => 'manage-book'
    ]);
    
    Route::get('/single-book/{id}/{name}',[
        'uses'  => 'Admin\BookController@singleBook',
        'as'    => 'single-book'
    ]);
    
     Route::get('/edit-book/{id}',[
        'uses'  => 'Admin\BookController@editBook',
        'as'    => 'edit-book'
    ]);
    
    Route::post('/delete-book', [
        'uses'  => 'Admin\BookController@deleteBook',
        'as'    => 'delete-book'
    ]);
    

//    Book Detail View , ByWriter ByPublisher ByCategory

    Route::get('/book/{id}/{name}',[
        'uses'  => 'Front\HomeController@bookDetail',
        'as'    => 'book-detail'
    ]);
    Route::get('/book/writer/{id}/{name}',[
        'uses'  => 'Front\HomeController@writerDetail',
        'as'    => 'writer-detail'
    ]);
    Route::get('/book/publisher/{id}/{name}',[
        'uses'  => 'Front\HomeController@publisherDetail',
        'as'    => 'publisher-detail'
    ]);
    Route::get('/book/category/{id}/{name}',[
        'uses'  => 'Front\HomeController@categoryDetail',
        'as'    => 'category-detail'
    ]);

    Route::get('/writers',[
        'uses'  => 'Front\HomeController@writers',
        'as'    => 'writers'
    ]);
    Route::get('/pulishers',[
        'uses'  => 'Front\HomeController@pulishers',
        'as'    => 'pulishers'
    ]);
    Route::get('/categories',[
        'uses'  => 'Front\HomeController@categories',
        'as'    => 'categories'
    ]);




//    Request a book
    Route::post('/request-a-book', [
        'uses'  => 'Front\BookRequestController@requestBook',
        'as'    => 'request-a-book'
    ]);
    Route::get('/manage-book-request', [
        'uses'  => 'Front\BookRequestController@manageBookRequest',
        'as'    => 'manage-book-request'
    ]);


//    Book Publisher
    Route::get('/add-book-publisher',[
        'uses'  => 'Admin\BookPublisherController@addBookPublisher',
        'as'    => 'add-book-publisher'
    ]);
    Route::post('/new-book-publisher', [
        'uses'  => 'Admin\BookPublisherController@newBookPublisher',
        'as'    => 'new-book-publisher'
    ]);
    
    Route::post('/update-book-publisher', [
        'uses'  => 'Admin\BookPublisherController@updateBookPublisher',
        'as'    => 'update-book-publisher'
    ]);
    Route::get('/update-book-publisher-status/{id}', [
        'uses'  => 'Admin\BookPublisherController@updateBookPublisherStatus',
        'as'    => 'update-book-publisher-status'
    ]);
  
    Route::get('/manage-book-publisher',[
        'uses'  => 'Admin\BookPublisherController@manageBookPublisher',
        'as'    => 'manage-book-publisher'
    ]);
    
    Route::get('/edit-book-publisher/{id}',[
        'uses'  => 'Admin\BookPublisherController@editBookPublisher',
        'as'    => 'edit-book-publisher'
    ]);
    
    Route::post('/delete-book-publisher', [
        'uses'  => 'Admin\BookPublisherController@deleteBookPublisher',
        'as'    => 'delete-book-publisher'
    ]);
   
    
//    Book Writer
    Route::get('/add-book-writer',[
        'uses'  => 'Admin\BookWriterController@addBookWriter',
        'as'    => 'add-book-writer'
    ]);
    
    
    Route::post('/new-book-writer', [
        'uses'  => 'Admin\BookWriterController@newBookWriter',
        'as'    => 'new-book-writer'
    ]);
    
    Route::post('/update-book-writer', [
        'uses'  => 'Admin\BookWriterController@updateBookWriter',
        'as'    => 'update-book-writer'
    ]);
    Route::get('/update-book-writer-status/{id}', [
        'uses'  => 'Admin\BookWriterController@updateBookWriterStatus',
        'as'    => 'update-book-writer-status'
    ]);
  
    Route::get('/manage-book-writer',[
        'uses'  => 'Admin\BookWriterController@manageBookWriter',
        'as'    => 'manage-book-writer'
    ]);
    
    Route::get('/edit-book-writer/{id}',[
        'uses'  => 'Admin\BookWriterController@editBookWriter',
        'as'    => 'edit-book-writer'
    ]);
    
    Route::post('/delete-book-writer', [
        'uses'  => 'Admin\BookWriterController@deleteBookWriter',
        'as'    => 'delete-book-writer'
    ]);


//    Book Category    
    Route::get('/add-book-category',[
        'uses'  => 'Admin\BookCategoryController@addBookCategory',
        'as'    => 'add-book-category'
    ]);
    
    Route::post('/new-book-category', [
        'uses'  => 'Admin\BookCategoryController@newBookCategory',
        'as'    => 'new-book-category'
    ]);
    
    Route::post('/update-book-category', [
        'uses'  => 'Admin\BookCategoryController@updateBookCategory',
        'as'    => 'update-book-category'
    ]);
    Route::get('/update-book-category-status/{id}', [
        'uses'  => 'Admin\BookCategoryController@updateBookCategoryStatus',
        'as'    => 'update-book-category-status'
    ]);
  
    Route::get('/manage-book-category',[
        'uses'  => 'Admin\BookCategoryController@manageBookCategory',
        'as'    => 'manage-book-category'
    ]);
    
    Route::get('/edit-book-category/{id}',[
        'uses'  => 'Admin\BookCategoryController@editBookCategory',
        'as'    => 'edit-book-category'
    ]);
    
    Route::post('/delete-book-category', [
        'uses'  => 'Admin\BookCategoryController@deleteBookCategory',
        'as'    => 'delete-book-category'
    ]);

//    Book Options / Language / Genre / Tag
    
    Route::get('/add-book-option',[
        'uses'  => 'Admin\BookOptionController@addBookOption',
        'as'    => 'add-book-option'
    ]);
 
    Route::post('/new-book-option', [
        'uses'  => 'Admin\BookOptionController@newBookOption',
        'as'    => 'new-book-option'
    ]);
 
    Route::post('/update-book-option', [
        'uses'  => 'Admin\BookOptionController@updateBookOption',
        'as'    => 'update-book-option'
    ]);
    Route::get('/update-book-option-status/{id}', [
        'uses'  => 'Admin\BookOptionController@updateBookOptionStatus',
        'as'    => 'update-book-option-status'
    ]);
  
    Route::get('/manage-book-option',[
        'uses'  => 'Admin\BookOptionController@manageBookOption',
        'as'    => 'manage-book-option'
    ]);
    
    Route::get('/edit-book-option/{id}',[
        'uses'  => 'Admin\BookOptionController@editBookOption',
        'as'    => 'edit-book-option'
    ]);
    
    Route::post('/delete-book-option', [
        'uses'  => 'Admin\BookOptionController@deleteBookOption',
        'as'    => 'delete-book-option'
    ]);
    
    

//    Book Genre
    
    Route::post('/update-book-genre', [
        'uses'  => 'Admin\BookGenreController@updateBookGenre',
        'as'    => 'update-book-genre'
    ]);
    Route::get('/update-book-genre-status/{id}', [
        'uses'  => 'Admin\BookGenreController@updateBookGenreStatus',
        'as'    => 'update-book-genre-status'
    ]);
  
    Route::get('/edit-book-genre/{id}',[
        'uses'  => 'Admin\BookGenreController@editBookGenre',
        'as'    => 'edit-book-genre'
    ]);
    
    Route::post('/delete-book-genre', [
        'uses'  => 'Admin\BookGenreController@deleteBookGenre',
        'as'    => 'delete-book-genre'
    ]);

//    Book Language
    
    Route::post('/update-book-language', [
        'uses'  => 'Admin\BookLanguageController@updateBookLanguage',
        'as'    => 'update-book-language'
    ]);
    Route::get('/update-book-language-status/{id}', [
        'uses'  => 'Admin\BookLanguageController@updateBookLanguageStatus',
        'as'    => 'update-book-language-status'
    ]);
  
    Route::get('/edit-book-language/{id}',[
        'uses'  => 'Admin\BookLanguageController@editBookLanguage',
        'as'    => 'edit-book-language'
    ]);
    
    Route::post('/delete-book-language', [
        'uses'  => 'Admin\BookLanguageController@deleteBookLanguage',
        'as'    => 'delete-book-language'
    ]);

//    Book Tag
    
    Route::post('/update-book-tag', [
        'uses'  => 'Admin\BookTagController@updateBookTag',
        'as'    => 'update-book-tag'
    ]);
    Route::get('/update-book-tag-status/{id}', [
        'uses'  => 'Admin\BookTagController@updateBookTagStatus',
        'as'    => 'update-book-tag-status'
    ]);
  
    Route::get('/edit-book-tag/{id}',[
        'uses'  => 'Admin\BookTagController@editBookTag',
        'as'    => 'edit-book-tag'
    ]);
    
    Route::post('/delete-book-tag', [
        'uses'  => 'Admin\BookTagController@deleteBookTag',
        'as'    => 'delete-book-tag'
    ]);
    


Route::get('/user/home', 'HomeController@userIndex')->name('user.home');



//Category

    Route::get('/add-category', [
        'uses'  => 'Admin\CategoryController@addCategory',
        'as'    => 'add-category'
    ]);



