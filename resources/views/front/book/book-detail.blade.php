@extends('front.master')

@section('title')
    {{ $book->book_name }} | BoiChakra
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
                    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">

                        @include('front.book.include.aside')

                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-ad {{ $book->verified == 1 ? 'tg-verifiedad' : '' }} tg-detail tg-addetail">
                                <div class="tg-adcontent">
                                    <ul class="tg-pagesequence">
                                        <li><a href="{{ route('writer-detail', ['id'=> $book->writer_id, 'name'=>$book->writer_name]) }}">{{ $book->writer_name }}</a></li>
                                        <li><a href="{{ route('publisher-detail', ['id'=> $book->publisher_id, 'name'=>$book->publisher_name]) }}">{{ $book->publisher_name }}</a></li>
                                        <li><span>{{ $book->book_name }}</span></li>
                                    </ul>
                                    <div class="tg-adtitle">
                                        <h2>{{ $book->book_name }}</h2>
                                    </div>
                                    <ul class="tg-admetadata">
                                        <li>By: <a href="javascript:void(0);">{{ $book->name }}</a></li>
                                        {{--<li>Ad Id: <a href="javascript:void(0);">248GCa57</a></li>--}}
                                        <li><i class="icon-earth"></i><address>earth Manchester, UK</address></li>
                                        <li><i class="icon-eye"></i><span>15642</span></li>
                                    </ul>
                                    <div class="tg-share">
                                        <strong>share:</strong>
                                        <ul class="tg-socialicons">
                                            <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                            <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                            <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <div class="tg-adadded">
                                            <i class="icon-book"></i>
                                            <span>Posted on {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $book->created_at)->format('M d, Y') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid images_3_of_2">
                                    <ul id="etalage">
                                        <li>
                                            <a href="#">
                                                @if($book->book_cover)
                                                    <img class="etalage_thumb_image img-responsive" src="{{ asset($book->book_cover) }}" alt="Image" />
                                                    <img class="etalage_source_image img-responsive" src="{{ asset($book->book_cover) }}" title="" alt="Image" />
                                                @else
                                                    <img class="etalage_thumb_image img-responsive" src="{{ asset('/') }}images/classifiedpro/author/img-03.jpg" alt="Image" />
                                                    <img class="etalage_source_image img-responsive" src="{{ asset('/') }}images/classifiedpro/author/img-03.jpg" title="" alt="Image" />
                                                @endif

                                            </a>
                                        </li>
                                        <li>
                                            {{--@foreach($bookImages as $bookImage)--}}
                                                {{--@if($bookImage->book_id == $book->id)--}}
                                                    {{--<img class="etalage_thumb_image img-responsive" src="{{ asset($bookImage->book_image) }}front/product-view/images/s2.jpg" alt="Image" />--}}
                                                    {{--<img class="etalage_source_image img-responsive" src="{{ asset($bookImage->book_image) }}front/product-view/images/s2.jpg" class="" alt="Image" />--}}
                                                {{--@endif--}}
                                            {{--@endforeach--}}
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <figure>

                                    {{--<span class="tg-themetag tg-featuretag">featured</span>--}}
                                    {{--<span class="tg-photocount">See 18 Photos</span>--}}
                                    {{--<div id="tg-productgallery" class="tg-productgallery"><p>Put your alt no-js content here.</p></div>--}}
                                    {{--@if($book->book_cover)--}}
                                        {{--<img src="{{ asset($book->book_cover) }}" >--}}
                                    {{--@else--}}
                                        {{--<img src="{{ asset('/') }}images/classifiedpro/gallery/img-01.jpg" >--}}
                                    {{--@endif--}}
                                </figure>
                                <div class="tg-description">
                                    {!! $book->book_details !!}
                                </div>
                            </div>

                            @include('front.book.include.more-by-uploader')

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        @include('front.book.include.book-suggestion')

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
            <script>
                var msg = '{{Session::get('alert')}}';
                var exist = '{{Session::has('alert')}}';
                if(exist){
                    alert(msg);
                }
            </script>

@include('front.book.include.book-request-modal')

    @endsection