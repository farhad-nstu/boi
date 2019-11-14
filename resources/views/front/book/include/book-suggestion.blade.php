<div class="tg-youmayalsolike">
    <div class="tg-sectionhead">
        <div class="tg-title">
            <h2>You May Also Like</h2>
        </div>
        <div class="tg-description">
            <p>56,432 Similar Ads</p>
        </div>
    </div>
    <div class="row">
        <div class="tg-ads">
            @foreach($allBooks as $allBook)
                @if($book->book_category_id == $allBook->book_category_id)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tg-ad tg-verifiedad">
                            <figure>
                                <span class="tg-themetag tg-featuretag">featured</span>
                                @if($allBook->book_cover)
                                    <a href="{{ route('book-detail', ['id' => $allBook->id, 'name' => $allBook->book_name]) }}"><img src="{{ asset($allBook->book_cover) }}" style="height: 200px; width: 200px;" alt="image description"></a>
                                @else
                                    <a href="{{ route('book-detail', ['id' => $allBook->id, 'name' => $allBook->book_name]) }}"><img src="{{ asset('/') }}images/classifiedpro/ads/img-01.jpg"  alt="image description"></a>
                                @endif
                                {{--<span class="tg-photocount">See 18 Photos</span>--}}
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
                                    <h3><a href="{{ route('book-detail', ['id' => $allBook->id, 'name' => $allBook->book_name]) }}">{{ $allBook->book_name }}</a></h3>
                                </div>
                                <time datetime="2017-06-06">Posted: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $book->created_at)->diffForHumans() }}</time>
                                <div class="tg-adprice"><h4>
                                        @if($allBook->assigned == 1)
                                            <span class="text-danger">Picked</span>
                                        @endif
                                        @if($allBook->assigned == 0)
                                            <span class="text-primary">Available</span>
                                        @endif
                                    </h4></div>
                                <address>44-46 abc Road, Manchester</address>
                                <div class="tg-phonelike">
                                    <a class="tg-btnphone" href="javascript:void(0);">
                                        <i class="icon-phone-handset"></i>
                                        @foreach($users as $user)
                                            @if( $allBook->user_id == $user->id)
                                                <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="{{ $user->mobile  }}"><em>Show Phone No.</em></span>
                                            @endif
                                        @endforeach
                                    </a>
                                    <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
            @endforeach
        </div>
        <div class="tg-viewallbox">
            <a class="tg-btn" href="javascript:void(0)">View All</a>
        </div>
    </div>
</div>