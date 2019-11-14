@extends('front.master')

@section('title')
    {{ $publisher->publisher_name }} Books | BoiChakra
@endsection

@section('body')



    {{--Home Slider--}}
    @include('front.book.include.slider')

    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                About Us Start
        *************************************-->
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns" style="padding: 20px 0px; ">

                    @include('front.book.inc-by-writer.aside')

                    <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                        <div style="height:  200px; background-color: black; ">

                            <img src="{{ asset('/') }}writer.jpg" style="position: absolute; height: 200px; width: 850px; opacity: 0.5">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                @if($publisher->publisher_image)
                                    <img class="img-circle" style="margin-top: 20px; margin-left: 10px; height: 150px; width: 150px;" src="{{ asset($publisher->publisher_image) }}" alt="image description">
                                @else
                                    <img class="img-circle" style="margin-top: 20px; margin-left: 10px; height: 150px; width: 150px;" src="{{ asset('/') }}images/classifiedpro/author/img-06.jpg" alt="image description">
                                @endif
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <h3 style="color: white">{{ $publisher->publisher_name }}</h3>
                                <span style="color: white; margin-top: 20px;">{{ $publisher->publisher_details }}</span>
                            </div>
                        </div>

                        <br/>

                        <div id="tg-content" class="tg-content">
                            <div class="tg-contenthead">
                                <ul class="tg-pagesequence">
                                    <li><a href="{{ route('/') }}">Home</a></li>
                                    <li><a href="{{ route('/') }}">Books</a></li>
                                    <li><a href="{{ route('pulishers') }}">Publisher</a></li>
                                    <li><span>{{ $publisher->publisher_name }}</span></li>
                                </ul>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tg-pagehead" style="padding: 0 0 0px;">
                                            <h3 >Books of {{ $publisher->publisher_name }}</h3>
                                            <p >{{ \App\Book::where('publisher_id', $publisher->id)->count() }} Results on {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', today())->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="pull-right">
                                            <div class="tg-sortby">
                                                <strong>Sort by:</strong>
                                                <div class="tg-select">
                                                    <select>
                                                        <option value="Most Recent">Most Recent</option>
                                                        <option value="Most Recent">Best Donor</option>
                                                        <option value="Most Recent">Popular</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tg-ads">
                                <div class="row">
                                    @foreach($books as $book)
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-4 tg-verticaltop">
                                            <div class="tg-ad tg-verifiedad">
                                                <figure>
                                                    <span class="tg-themetag tg-featuretag">featured</span>
                                                    @if($book->book_cover)
                                                        <a href="{{ route('book-detail', ['id' => $book->id, 'name' => $book->book_name]) }}"><img src="{{ asset($book->book_cover) }}" alt="{{ asset($book->book_name) }}" style="height: 230px;"></a>
                                                    @else
                                                        <a href="{{ route('book-detail', ['id' => $book->id, 'name' => $book->book_name]) }}"><img src="{{ asset('/') }}images/classifiedpro/img-05.jpg" alt="{{ asset($book->book_name) }}"></a>
                                                    @endif

                                                </figure>
                                                <div class="tg-adcontent">
                                                    <ul class="tg-productcagegories">
                                                        <li>
                                                            @foreach($categories as $category)
                                                                @if($book->book_category_id == $category->id)
                                                                    <a href="{{ route('category-detail', ['id'=> $category->id, 'name'=>$category->book_category_name ]) }}">
                                                                        {{ $category->book_category_name }}
                                                                    </a>
                                                                @endif
                                                            @endforeach
                                                        </li>
                                                    </ul>
                                                    <div class="tg-adtitle">
                                                        <h3><a href="{{ route('book-detail', ['id' => $book->id, 'name' => $book->book_name]) }};">{{ $book->book_name }}</a></h3>
                                                    </div>
                                                    <time datetime="2017-06-06">Posted: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $book->created_at)->diffForHumans() }}</time>
                                                    <div class="tg-adprice"><h4>
                                                            @if($book->assigned == 1)
                                                                <span class="text-danger">Picked</span>
                                                            @endif
                                                            @if($book->assigned == 0)
                                                                <span class="text-primary">Available</span>
                                                            @endif
                                                        </h4></div>
                                                    <address>44-46 abc Road, Manchester</address>
                                                    <div class="tg-phonelike">
                                                        <a class="tg-btnphone" href="javascript:void(0);">
                                                            <i class="icon-phone-handset"></i>
                                                            @foreach($users as $user)
                                                                @if( $book->user_id == $user->id)
                                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="{{ $user->mobile  }}"><em>Show Phone No.</em></span>
                                                                @endif
                                                            @endforeach
                                                        </a>
                                                        <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{ $books->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                About Us End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

    {{--book Viewer--}}


@endsection