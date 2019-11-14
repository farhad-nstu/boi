
<!--					Dashboard Alerts Start-->

@if(Session::has('info') || Session::has('warning') || Session::has('failed') || Session::has('success'))
            <div class="tg-dbsectionspace tg-haslayout tg-alertexamples">
                
                    @if(Session::has('info'))
                    <div class="tg-alert alert alert-info fade in">
                        <p><strong>{{Session::get('info')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif
                
                    @if(Session::has('warning'))
                    <div class="tg-alert alert alert-warning fade in">
                        <p><strong>{{Session::get('warning')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif
                    
                    @if(Session::has('failed'))
                    <div class="tg-alert alert alert-danger fade in">
                        <p><strong>{{Session::get('failed')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif
                    
                    @if(Session::has('success'))
                    <div class="tg-alert alert alert-success fade in">
                        <p><strong>{{Session::get('success')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif

			</div>
@endif
