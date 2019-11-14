@if(Session::has('failed-bookGenre'))
                    <div class="tg-alert alert alert-danger fade in">
                        <p><strong>{{Session::get('failed-bookGenre')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif
    @if(Session::has('failed-bookLanguage'))
                    <div class="tg-alert alert alert-danger fade in">
                        <p><strong>{{Session::get('failed-bookLanguage')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif
    @if(Session::has('failed-bookTag'))
                    <div class="tg-alert alert alert-danger fade in">
                        <p><strong>{{Session::get('failed-bookTag')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif