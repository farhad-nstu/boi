{{--Login--}}
<div id="tg-modalselectcurrency" class="modal fade tg-thememodal tg-modalselectcurrency" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content tg-thememodalcontent">
            <div class="tg-title">
                <strong>Login</strong>
            </div>
            <form class="tg-formtheme" style="margin-top: 20px;" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                <fieldset>
                    <div class="form-group">
                        <span>Email :</span>
                        <input type="email" class="pull-right" name="email" placeholder="Enter Email..." required autofocus>

                    </div>
                    <div class="form-group">
                        <span>Password :</span>
                        <input  type="password" name="password" class="pull-right" placeholder="Enter Password..." required>
                    </div>
                    <div class="form-group">

                        <label class="form-check-label" for="remember">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="form-check-label" for="remember">Remember Me</span>
                        </label>
                    </div>
                </fieldset>
                <div class="form-group">
                    <button type="submit" class="tg-btn">Login</button>
                    <span class="text-primary" style="margin-top: 5px; margin-left: 10px;"><a href="javascript:void(0);">Forget Password?</a></span>
                </div>
            </form>

            <div>
                <ul class="tg-sociallogingsignup">
                    <br/><br/>
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

{{--Register--}}
<div id="tg-modalpriceconverter" class="modal fade tg-thememodal tg-modalpriceconverter" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content tg-thememodalcontent">
            <div class="tg-title">
                <strong>Register</strong>
            </div>
            <form class="tg-formtheme" style="margin-top: 20px;" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <span>Email :</span>
                        <input type="email" class="pull-right" name="email" placeholder="Enter Email..." required autofocus>

                    </div>
                    <div class="form-group">
                        <span>Password :</span>
                        <input  type="password" name="password" class="pull-right" placeholder="Enter Password..." required>
                    </div>
                    <div class="form-group">

                        <label class="form-check-label" for="remember">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="form-check-label" for="remember">Remember Me</span>
                        </label>
                    </div>
                </fieldset>
                <div class="form-group">
                    <button type="submit" class="tg-btn">Login</button>
                    <span class="text-primary" style="margin-top: 5px; margin-left: 10px;"><a href="{{ route('password.request') }}">Forget Password?</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
