<aside id="tg-sidebar" class="tg-sidebar">
    {{--<div class="tg-pricebox">--}}
        {{--<div id="tg-flagstrapfour" class="tg-flagstrap" data-input-name="country"></div>--}}
        {{--<div class="tg-priceandlastupdate">--}}
            {{--<span>$200</span>--}}
            {{--<span>Last Updated: 6 hours ago</span>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="tg-sellercontactdetail">
        <div class="tg-sellertitle"><h1>Donor Contact Detail</h1></div>
        <div class="tg-sellercontact">
            <div class="tg-memberinfobox">
                <figure><a href="javascript:void(0);"><img src="{{ asset('/')  }}images/classifiedpro/author/img-02.jpg" alt="image description"></a></figure>
                <div class="tg-memberinfo">
                    <h3><a href="javascript:void(0);">{{ $book->name }}</a></h3>
                    <span>Member Since {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', Auth::user()->created_at)->format('M d, Y') }}</span>
                    <a class="tg-btnseeallads" href="javascript:void(0);">See All Ads</a>
                </div>
            </div>
            <a class="tg-btnphone" href="javascript:void(0);">
                <i class="icon-phone-handset"></i>

                @foreach($users as $user)
                    @if( $book->user_id == $user->id)
                        <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="{{ $user->mobile  }}">
												<em>Show Phone No.</em>
												<span>Click To Show Number</span>
											</span>
                    @endif
                @endforeach

            </a>

            <a type="button" class="tg-btnmakeanoffer" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="icon-briefcase"></i>
                <span>
                    <em>Plase A Request</em>
                    <span>Ask the donor for this book.</span>
                </span>
            </a>

            <span class="tg-like tg-liked"><i class="fa fa-heart">Add To Favourite</i></span>
        </div>
        <div class="tg-sellerlocation">
            <div id="tg-locationmap" class="tg-locationmap"></div>
        </div>
    </div>
    <div class="tg-safetytips">
        <div class="tg-safetytipstitle"><h2>Useful Tips</h2></div>
        <div id="tg-safetytipsslider" class="tg-safetytipsslider slid owl-carousel">
            <div class="item tg-safetytip active">
                <h3>TIP # 01:</h3>
                <div class="tg-description">
                    <p>If you are interested for this book just make a request</p>
                </div>
            </div>
            <div class="item tg-safetytip">
                <h3>TIP # 02:</h3>
                <div class="tg-description">
                    <p>Once accepted by the donor pick up the book.</p>
                </div>
            </div>
            <div class="item tg-safetytip">
                <h3>TIP # 03:</h3>
                <div class="tg-description">
                    <p>After finish reading return the book safely. No charge by us or donor.</p>
                </div>
            </div>
        </div>
        <div id="tg-currentandtotalslides" class="tg-currentandtotalslides"></div>
    </div>
    <div class="tg-reportthisadbox">
        <div class="tg-reportthisadtitle">
            <h2>Report This Ad</h2>
        </div>
        <form class="tg-formtheme tg-formreportthisad">
            <h3>Select Reason:</h3>
            <fieldset>
                <div class="tg-radio">
                    <input id="tg-radioone" type="radio" name="repotadd" value="This is illegal/fraudulent" checked>
                    <label for="tg-radioone">This is illegal/fraudulent</label>
                </div>
                <div class="tg-radio">
                    <input id="tg-radiotwo" type="radio" name="repotadd" value="This ad is spam">
                    <label for="tg-radiotwo">This ad is spam</label>
                </div>
                <div class="tg-radio">
                    <input id="tg-radiothree" type="radio" name="repotadd" value="This ad is a duplicate">
                    <label for="tg-radiothree">This ad is a duplicate</label>
                </div>
                <div class="tg-radio">
                    <input id="tg-radiofour" type="radio" name="repotadd" value="This ad is in the wrong category">
                    <label for="tg-radiofour">This ad is in the wrong category</label>
                </div>
                <div class="tg-radio">
                    <input id="tg-radiofive" type="radio" name="repotadd" value="The ad goes against posting rules">
                    <label for="tg-radiofive">The ad goes against <span class="tg-themecolor">posting rules</span></label>
                </div>
                <div class="form-group tg-inputwithicon">
                    <i class="icon-bubble"></i>
                    <textarea class="form-control" placeholder="Provide More Information"></textarea>
                </div>
                <div class="tg-btns">
                    <button class="tg-btn" type="button">Send Report</button>
                    <button class="tg-btn" type="button">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
</aside>