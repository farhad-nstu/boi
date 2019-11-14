<nav id="tg-nav" class="tg-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
					<ul>
										<li class="menu-item">
											<a href="{{ route('home')}}">Home</a>
										</li>
                                        
										<li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Books</a>
											<ul class="sub-menu">
												<li><a href="{{ route('add-book') }}">Add Book</a></li>
												<li><a href="{{ route('manage-book') }}">Manage Book</a></li>
											</ul>
										</li>
                                        <li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Writers</a>
											<ul class="sub-menu">
												<li><a href="{{ route('add-book-writer') }}">Add Writer</a></li>
												<li><a href="{{ route('manage-book-writer') }}">Manage Writer</a></li>
											</ul>
										</li>
                                        <li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Categories</a>
											<ul class="sub-menu">
												<li><a href="{{ route('add-book-category') }}">Add Category</a></li>
												<li><a href="{{ route('manage-book-category') }}">Manage Category</a></li>
											</ul>
										</li>
                                        <li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Publishers</a>
											<ul class="sub-menu">
												<li><a href="{{ route('add-book-publisher') }}">Add Publisher</a></li>
												<li><a href="{{ route('manage-book-publisher') }}">Manage Publisher</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">More</a>
											<ul class="sub-menu">
												<li><a href="{{ route('manage-book-option') }}">Manage Book Option</a></li>
												<li><a href="{{ route('manage-book-request') }}">Book Request</a></li>
												<li><a href="{{ route('manage-user') }}">Users</a></li>
											</ul>
										</li>
                                        <li class="menu-item">

										</li>
                                        
									</ul>
				</div>
			</nav>