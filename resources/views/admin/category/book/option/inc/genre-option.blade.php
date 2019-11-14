<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-dashboardbox">
									
									<div class="tg-dashboardholder">
										<h4>Book Genre Details</h4>

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
													<th>Name</th>
                                                    <th>Status</th>
                                                    <th>Added On</th>
                                                    <th>Action</th>
												</tr>
                                              
											</thead>
											<tbody>
												@php($i = 1)
                                                @foreach($genres as $genre)
                                                
												<tr data-category="active">
													<td>{{ $i++ }}</td>
													<td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adone" type="checkbox" name="myads" value="myadone">
															<label for="tg-adone"></label>
														</span>
													</td>
													
													<td data-title="Title">
														<h3>{{ $genre->book_genre_name}}</h3>
													</td>
													
													<td data-title="Status">
                                                        @if($genre->status == 1)
                                                            <a class="tg-btnaction tg-btnactionedit"><i class="fa fa-unlock"></i></a>
                                                        @endif
                                                        
                                                        @if($genre->status == 0)
                                                            <a class="tg-btnaction tg-btnactionedit"><i class="fa fa-lock"></i></a>
                                                        @endif
                                                        
                                                        
                                                    </td>
													
													<td data-title="Date">
														<time datetime="{{ $genre->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $genre->created_at)->format('d-M-y') }}</time>

													</td>
													<td data-title="Action">
														<div class="tg-btnsactions">
                                                            
<!--                                                            Status-->
															<a class="tg-btnaction tg-btnactionview" href="{{route('update-book-genre-status',['id' => $genre->id])}}">
                                                                @if($genre->status == 0)
                                                                    <i class="fa fa-unlock"></i>
                                                                @endif
                                                                @if($genre->status == 1)
                                                                    <i class="fa fa-lock"></i>
                                                                @endif
                                                            </a>
                                                        
<!--                                                            Edit-->
															<a class="tg-btnaction tg-btnactionedit" href="{{route('edit-book-genre',['id' => $genre->id])}}"><i class="fa fa-pencil"></i></a>
															
<!--                                                            Delete-->
                                                            <a id="{{ $genre->id }}" class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);" onclick="event.preventDefault();

                                                                var confirmDelete = confirm('Are you sure to Delete? __('+'{{ $genre->book_genre_name }}'+')')
                                                                if(confirmDelete) {
                                                                document.getElementById('deleteId'+'{{ $genre->id }}').submit();
                                                                }
                                                                "><i class="fa fa-trash"></i></a>
                                                          
                                                        <form id="deleteId{{ $genre->id }}" action="{{ route('delete-book-genre') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $genre->id }}" name="id"/>
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