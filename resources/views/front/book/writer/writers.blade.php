@extends('front.master')

@section('title')
    Writers | BoiChakra
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
                                    <h2>All Writers</h2>
                                </div>
                                <div class="tg-description" style="margin-top: -10px;">
                                    <p>{{ \App\BookWriter::count() }} Writers Found</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 pull-right">
                            <div class="form-group tg-inputwithicon">
                                <input type="search" name="search" class="form-control" placeholder="Search Writer Here..">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tg-ads">
                    @foreach($allWriters as $writer)
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="tg-ad tg-verifiedad">
                                <figure>

                                    @if($writer->writer_image)
                                        <a href="{{ route('writer-detail', ['id' => $writer->id, 'name' => $writer->writer_name]) }}"><img src="{{ asset($writer->writer_image) }}" alt="{{ $writer->writer_name }}"style="height: 230px;"></a>
                                    @else
                                        <a href="{{ route('writer-detail', ['id' => $writer->id, 'name' => $writer->writer_name]) }}"><img src="{{ asset('/') }}images/classifiedpro/img-05.jpg" alt="{{ $writer->writer_name }}"></a>
                                    @endif
                                    {{--<span class="tg-photocount">See 18 Photos</span>--}}
                                </figure>
                                <div class="tg-adcontent">

                                    <div class="tg-adtitle">
                                        <h3><a href="{{ route('writer-detail', ['id' => $writer->id, 'name' => $writer->writer_name]) }}">{{ $writer->writer_name }}</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">{{ \App\Book::where('writer_id', $writer->id)->count() }} Books</time>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $allWriters->links() }}

            </div>
        </div>
    </section>


@endsection