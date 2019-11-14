<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="{{ route('/') }}"><img src="{{asset('/')}}front/images/logo.png" alt="company logo here"></a></strong>
							<a class="tg-btn" href="{{ route('add-book') }}">
								<i class="fa fa-book"></i>
								<span>post a book</span>
							</a>
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
                                @include('front.include.header.nav')
                                
							</nav>
						</div>
					</div>
				</div>
			</div>