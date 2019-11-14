@extends('front.master')

@section('title')
    Categories | BoiChakra
@endsection

@section('body')



    {{--Home Slider--}}
    @include('front.book.include.slider')

    <section class="tg-main tg-haslayout" style="padding: 0px 0px; margin-top: -60px;">
        <div class="container">
            <div class="row">
                <div id="tg-content" class="tg-content">
                    <div class="tg-loginsignup">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom: 20px;">

                            <div class="tg-texbox">
                                <p><strong>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</strong></p>
                                <p>Quis nostrud exercitation ullamcoaris nisiuate aliquip ex ea commodo consequat aute irure dolor atem reprehenderit in esse.</p>
                                <ul>
                                    <li>Proident sunt in culpa qui officia</li>
                                    <li>Deserunt mollit anim idestorum</li>
                                    <li>Sedutana perspiciatis</li>
                                    <li>Aunde omnis iste natus voluptatem</li>
                                    <li>Cullamcoaris nisiutia aliquip</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

                            <div class="tg-title">
                                <h2>Register Now</h2>
                            </div>
                            <div class="tg-haslayout">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                        <form class="tg-formtheme tg-formregister">
                                            <fieldset>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-mobile2"></i>
                                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile*">
                                                </div>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-lock"></i>
                                                    <input type="password" name="password" class="form-control" placeholder="Password*">
                                                </div>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-lock"></i>
                                                    <input type="password" name="retypepassword" class="form-control" placeholder="Retype Password*">
                                                </div>
                                                <div class="form-group">
                                                    <div class="tg-checkbox">
                                                        <input id="tg-agree" type="checkbox" name="agree" value="agree">
                                                        <label for="tg-agree">By registering, you accept our <a href="javascript:void(0);">Terms &amp; Conditions</a></label>
                                                    </div>
                                                </div>
                                                <button class="tg-btn" type="button">Register</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                        <ul class="tg-sociallogingsignup">
                                            <li class="tg-googleplus">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-google-plus"></i>
                                                    <span>Sign in with <strong>“Google”</strong></span>
                                                </a>
                                            </li>
                                            <li class="tg-facebook">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>Sign in with <strong>“Facebook”</strong></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection