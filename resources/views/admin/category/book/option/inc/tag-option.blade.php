<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-dashboardbox">
									
									<div class="tg-dashboardholder">
										<h4>Book Tag Details</h4>

										<table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads dataTable js-exportable">
											<thead>
												<tr>
													<th>Sl</th>
													<th>
														<span class="tg-checkbox">
															<input id="tg-checkedall" type="checkbox" name="myads" value="checkall">
															<label for="tg-checkedall"></label>
														</span>
													</th>
													<th>Tag Name</th>
													<th>Book Name</th>
													<th>Posted by</th>
                                                    <th>Added On</th>
                                                    <th>Action</th>
												</tr>
                                              
											</thead>
											<tbody>
                                                @php($i=1)
                                                @foreach($tags as $tag)
                                                
												<tr data-category="active">
													<td>{{ $i++ }}</td>
													<td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adone" type="checkbox" name="myads" value="myadone">
															<label for="tg-adone"></label>
														</span>
													</td>
													
													<td data-title="Title">
														<h3>{{ $tag->book_tag_name}}</h3>
													</td>
													<td data-title="Title">
														@foreach($tagBooks as $tagBook)
															@if($tagBook->id == $tag->book_id)
																<a href="{{ route('book-detail', ['id' => $tagBook->id, 'name' => $tagBook->book_name]) }}"><h3 style="color: blueviolet">{{ $tagBook->book_name}}</h3></a>
															@endif
														@endforeach
													</td>

													<td data-title="Title">

														@foreach($tagBooks as $tagBook)
															@if($tagBook->id == $tag->book_id)
																@foreach($tagUsers as $tagUser)
																	@if($tagBook->user_id == $tagUser->id)
																		<h3>{{ $tagUser->name}}</h3>
																	@endif
																@endforeach
															@endif
														@endforeach

													</td>
													

													
													<td data-title="Date">
														<time datetime="{{ $tag->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->created_at)->format('d-M-y') }}</time>

													</td>
													<td data-title="Action">
														<div class="tg-btnsactions">
                                                            
<!--                                                            Status-->
															<a class="tg-btnaction tg-btnactionview" href="{{route('update-book-tag-status',['id' => $tag->id])}}">
                                                                @if($tag->status == 0)
                                                                    <i class="fa fa-unlock"></i>
                                                                @endif
                                                                @if($tag->status == 1)
                                                                    <i class="fa fa-lock"></i>
                                                                @endif
                                                            </a>
                                                        
<!--                                                            Edit-->
															<a class="tg-btnaction tg-btnactionedit" href="{{route('edit-book-tag',['id' => $tag->id])}}"><i class="fa fa-pencil"></i></a>
															
<!--                                                            Delete-->
                                                            <a id="{{ $tag->id }}" class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);" onclick="event.preventDefault();

                                                                var confirmDelete = confirm('Are you sure to Delete? __('+'{{ $tag->book_tag_name }}'+')')
                                                                if(confirmDelete) {
                                                                document.getElementById('deleteId'+'{{ $tag->id }}').submit();
                                                                }
                                                                "><i class="fa fa-trash"></i></a>
                                                          
                                                        <form id="deleteId{{ $tag->id }}" action="{{ route('delete-book-tag') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $tag->id }}" name="id"/>
                                                        </form>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>

									</div>
								</div>
							</div>