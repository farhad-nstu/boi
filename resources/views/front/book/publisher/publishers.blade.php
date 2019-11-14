@extends('front.master')

@section('title')
    Publishers | BoiChakra
@endsection

@section('body')



    {{--Home Slider--}}
    @include('front.book.include.slider')

    <section class="tg-sectionspace tg-haslayout" style="padding: 10px 0px;">
        <div class="container">
            <div class="row">

                <div class="tg-otherfilters">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-left">
                            <div class="" style="margin-left: 15px;">
                                <div class="">
                                    <h2>All Publihsers</h2>
                                </div>
                                <div class="tg-description" style="margin-top: -10px;">
                                    <p>{{ \App\BookPublisher::count() }} Publishers Found</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 pull-right">
                            <div class="form-group tg-inputwithicon">
                                <input type="search" name="search" class="form-control" placeholder="Search Publisher Here..">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tg-ads">
                    @foreach($allPublishers as $publisher)
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="tg-ad tg-verifiedad">
                                <figure>

                                    @if($publisher->publisher_image)
                                        <a href="{{ route('publisher-detail', ['id' => $publisher->id, 'name' => $publisher->publisher_name]) }}"><img src="{{ asset($publisher->publisher_image) }}" alt="{{ $publisher->publisher_name }}"style="height: 230px;"></a>
                                    @else
                                        <a href="{{ route('publisher-detail', ['id' => $publisher->id, 'name' => $publisher->publisher_name]) }}"><img src="{{ asset('/') }}images/classifiedpro/img-05.jpg" alt="{{ $publisher->publisher_name }}"></a>
                                    @endif
                                    {{--<span class="tg-photocount">See 18 Photos</span>--}}
                                </figure>
                                <div class="tg-adcontent">

                                    <div class="tg-adtitle">
                                        <h3><a href="{{ route('writer-detail', ['id' => $publisher->id, 'name' => $publisher->publisher_name]) }}">{{ $publisher->publisher_name }}</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">{{ \App\Book::where('publisher_id', $publisher->id)->count() }} Books</time>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $allPublishers->links() }}

            </div>
        </div>
    </section>


@endsection