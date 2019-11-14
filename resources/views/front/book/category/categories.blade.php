@extends('front.master')

@section('title')
    Categories | BoiChakra
@endsection

@section('body')



    {{--Home Slider--}}
    @include('front.book.include.slider')

    <section class="tg-sectionspace tg-haslayout" style="padding: 10px 0px;">
        <div class="container">
            <div class="row">

                <div class="tg-otherfilters">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-left" >
                            <div class="" style="margin-left: 15px;">
                                <div class="" >
                                    <h2>All Categories</h2>
                                </div>
                                <div class="tg-description" style="margin-top: -10px;">
                                    <p>{{ \App\BookCategory::count() }} Categories Found</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 pull-right">
                            <div class="form-group tg-inputwithicon">
                                <input type="search" name="search" class="form-control" placeholder="Search Category Here..">
                            </div>
                        </div>
                    </div>
                </div>

                <div>

                        @foreach($allCategories as $category)
                        <ul class="list-inline list-unstyled categoryList">
                            <li>
                                <div class="pFIrstCatCaroItem">
                                    <a href="{{ route('category-detail', ['id' => $category->id, 'name' => $category->book_category_name]) }}">
                                        <div class="bookSubjectList text-center">
                                            <div class="overlay-color">
                                                <img src="{{ asset('/') }}images/classifiedpro/blackboard.jpg" alt="{{ $category->book_category_name }}" style="height: 210px; width: 210px;">
                                                <div class="text-center textcategory" style="color: white">
                                                    {{ $category->book_category_name }}
                                                    <p style="font-size: 3mm">{{ \App\Book::where('book_category_id', $category->id)->count() }} Books</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                    {{ $allCategories->links() }}
                </div>

            </div>
        </div>
    </section>


    <style>
        .categoryList {
            font-size: 6mm;
            display: inline-block;
            position: relative;
            text-align: center;
            color: white;
            margin: 35px;
        }
        .list-inline {
            padding-left: 0;
            margin-left: -5px;
            list-style: none;
        }
        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .pFIrstCatCaroItem {
            display: inline-block;
            width: 120%;
            padding: 0 15px;
            vertical-align: top;
        }
        .textcategory {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .bookSubjectList .overlay-color {
            position: relative;
            transition: .5s ease;
        }
    </style>

@endsection