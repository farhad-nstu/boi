@extends('admin.master')

@section('title')
    Edit {{ $book->book_name }} | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

    <main id="tg-main" class="tg-main tg-haslayout">

        <section class="tg-dbsectionspace tg-haslayout">
            <div class="row">
                <form class="tg-formtheme tg-formdashboard" action="{{ route('update-book')}}" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this);" id="editForm">
                    @csrf
                    <fieldset>
                        <div class="tg-postanad">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Edit Book Details</h2>
                                    </div>
                                    <div class="tg-dashboardholder">
                                        <!--                                            Book Category ID-->
                                        <input type="hidden" name="category_id" value="1">
                                        <input type="hidden" name="id" value="{{ $book->id }}">

                                        <div class="form-group">
                                            <strong>Book Name</strong>
                                            <input type="text" name="book_name" class="form-control" value="{{ $book->book_name }}">
                                        </div>
                                        <div>
                                            <strong>Description</strong>
                                        </div>
                                        <div class="form-group">

                                            <textarea id="tg-tinymceeditor" name="book_details" class="tg-tinymceeditor">{{ $book->book_details }}</textarea>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                            <div class="form-group" >
                                                <strong>Book Cover</strong>
                                                <img src="{{ asset($book->book_cover) }}" style="height: 100px; width: 100px; margin-bottom: 10px;">
                                                <strong>Change Cover</strong>
                                                <input  type="file" name="book_cover" accept="image/*" >
                                                <span class="text-info">* Single Image</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                            <div class="form-group">
                                                <strong>Book Preview Images</strong>
                                                @foreach($bookImages as $bookImage)
                                                    <img src="{{ asset($bookImage->book_image) }}" style="height: 80px; width: 80px; margin-bottom: 10px; margin-right: 10px;">
                                                @endforeach
                                                <strong>Change Images</strong>
                                                <input  type="file" name="book_images[]" accept="image/*" multiple>
                                                <span class="text-info">* Max 4</span>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

                            <div class="tg-dashboardbox tg-contactdetail">
                                <div class="tg-dashboardboxtitle">
                                    <h2>More Detail</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select name="writer_id">
                                                <option>--Select Writer--</option>
                                                @foreach($writers as $writer)
                                                    <option value="{{ $writer->id }}">{{ $writer->writer_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select name="book_category_id">

                                                <option>--Select Category--</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->book_category_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select name="publisher_id">
                                                <option>--Select Publisher--</option>
                                                @foreach($publishers as $publisher)
                                                    <option value="{{ $publisher->id }}">{{ $publisher->publisher_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select name="book_language_id">
                                                <option>--Select Language--</option>
                                                @foreach($languages as $language)
                                                    <option value="{{ $language->id }}">{{ $language->book_language_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select name="book_genre_id">
                                                <option>--Select Genre--</option>
                                                @foreach($genres as $genre)
                                                    <option value="{{ $genre->id }}">{{ $genre->book_genre_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input id="tags_1" type="text" name="book_tag_names" class="tags form-control"
                                               value="
                                                @foreach($tags as $tag)
                                                       {{ $tag->book_tag_name }},
                                                       @endforeach
                                                "/>
                                        <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                    </div>

                                    <div class="form-group">
                                        <strong>Status</strong>
                                        <div class="tg-selectgroup">
													<span class="tg-radio">
														<input id="tg-sameuser" type="radio" name="status" value="1" {{ $book->status == 1 ? 'checked' : '' }}>
														<label for="tg-sameuser">Active</label>
													</span>
                                            <span class="tg-radio">
														<input id="tg-someoneelse" type="radio" name="status" value="0" {{ $book->status == 0 ? 'checked' : '' }}>
														<label for="tg-someoneelse">Save as Draft</label>
													</span>
                                        </div>
                                    </div>
                                    <div class="tg-checkbox">
                                        <input id="tg-agreetermsandrules" type="checkbox" name="agreetermsandrules" value="on" required >
                                        <label for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
                                    </div>

                                    <button class="tg-btn" type="sumbit">Post Book</button>
                                </div>
                            </div>
                        </div>
            </div>
            </fieldset>
            </form>
            </div>
        </section>

    </main>


    <script src="{{ asset('/') }}admin/js/vendor/jquery-library.js"></script>


    <script>

        document.forms['editForm'].elements['writer_id'].value='{{ $book->writer_id }}';
        document.forms['editForm'].elements['book_category_id'].value='{{ $book->book_category_id }}';
        document.forms['editForm'].elements['publisher_id'].value='{{ $book->publisher_id }}';
        document.forms['editForm'].elements['book_language_id'].value='{{ $book->book_language_id }}';
        document.forms['editForm'].elements['book_genre_id'].value='{{ $book->book_genre_id }}';

        function checkForm(form)
        {

            if(!form.agreetermsandrules.checked) {
                alert("Please indicate that you accept the Terms and Conditions");
                form.agreetermsandrules.focus();
                return false;
            }
            return true;
        }
    </script>



@endsection