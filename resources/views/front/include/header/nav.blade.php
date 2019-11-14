<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="menu-item">
											<a href="{{ route('/')}}">Home</a>
										</li>
										<li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Writers</a>
											<ul class="sub-menu">
												@foreach($writers as $writer)
												<li><a href="{{ route('writer-detail', ['id'=> $writer->id, 'name'=>$writer->writer_name]) }}">{{ $writer->writer_name }}</a></li>
													@endforeach
											</ul>
										</li>
                                        <li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Categories</a>
											<ul class="sub-menu">
												@foreach($categories as $category)
													<li><a href="{{ route('category-detail', ['id'=> $category->id, 'name'=>$category->book_category_name ]) }}">{{ $category->book_category_name }}</a></li>
												@endforeach
											</ul>
										</li>
                                        <li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Publishers</a>
											<ul class="sub-menu">
												@foreach($publishers as $publisher)
													<li><a href="{{ route('publisher-detail', ['id'=> $publisher->id, 'name'=>$publisher->publisher_name ]) }}">{{ $publisher->publisher_name }}</a></li>
												@endforeach
											</ul>
										</li>
									</ul>
								</div>