@extends('admin.master')

@section('title')
    {{ $book->book_name}} | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

<main id="tg-main" class="tg-main tg-haslayout">
    

    @include('admin.include.message')
    
    <!--************************************
					Section Start
			*************************************-->
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
					
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-dashboardbox">
									
									<div class="tg-dashboardholder">
                                            <div class="tg-adtitle">
                                                <h2>{{ $book->book_name}}</h2>
                                            </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                            <div>
                                                @if($book->book_cover)
                                                    <img style="width: 200px;" src="{{asset($book->book_cover)}}">
                                                @else
                                                    <img src="{{ asset('/') }}admin/images/thumbnail/img-06.jpg">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                            <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                                                        <h3>Writer:</h3>  
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
                                                        <h3 class="text-info">{{ $book->writer_name}}</h3>  
                                                    </div>
                                            </div>
                                           <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                                                        <h3>Category:</h3>  
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
                                                        <h3 class="text-info">{{ $book->book_category_name}}</h3>  
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                                                        <h3>Publisher:</h3>  
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
                                                        <h3 class="text-info">{{ $book->publisher_name}}</h3>  
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                                                        <h3>Genre:</h3>  
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
                                                        <h3 class="text-info">{{ $book->book_genre_name}}</h3>  
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                                                        <h3>Language:</h3>  
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
                                                        <h3 class="text-info">{{ $book->book_language_name}}</h3>  
                                                    </div>
                                            </div>

                                            <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                                                        <h3>Tags:</h3>  
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">

                                                        @if($tags->count())
                                                                @foreach($tags as $tag)
                                                                    @if($tag->book_id == $book->id)
                                                                        <span class="badge badge-info" style="margin-top: 10px;">{{ $tag->book_tag_name}} </span>
                                                                    @endif
                                                                @endforeach
                                                        @endif
                                                    </div>
                                                 
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left" >
                                                <p style="margin-top: -10px;">{!! $book->book_details !!}</p>
                                            </div>
                                        </div>
										<br/>
										<table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads">
											<thead>
												<tr>
                                                   
													<th>Cover</th>
													<th>Name</th>
                                                    <th>Posted by</th>
                                                    <th>Verified</th>
                                                    <th>Status</th>
                                                    <th>Added On</th>
                                                    <th>Action</th>
												</tr>
											</thead>
											<tbody>
                                                
                                                @php($i=1)
                                                
												<tr data-category="active">
													
													<td data-title="Photo">
                                                        @if($book->book_cover)
                                                        <img style="width: 80px;" src="{{asset($book->book_cover)}}">
                                                        @else
                                                        <img src="{{ asset('/') }}admin/images/thumbnail/img-06.jpg">
                                                        @endif
                                                    </td>
													<td data-title="Title">
														<h3>{{ $book->book_name}}</h3>
													</td>
                                                    <td data-title="Title">
														<h3>{{ Auth::user()->name}}</h3>
													</td>
                                                    <td data-title="Title">
														@if($book->verified == 1)
                                                            <span class="text-success">Yes</span>
                                                            @endif

                                                            @if($book->verified == 0)
                                                                <span class="text-danger">No</span>
                                                            @endif
													</td>
                                                    <td data-title="Title">
														@if($book->assigned == 0)
                                                            <span class="text-success">Available</span>
                                                            @endif

                                                            @if($book->assigned == 1)
                                                                <span class="text-danger">Picked</span>
                                                            @endif
													</td>
<!--
													<td data-title="Detail">
														<h3>{{ $book->publisher_name}}</h3>
													</td>
                                                    <td data-title="Detail">
														<h3>{{ $book->book_genre_name}}</h3>
													</td>
                                                    <td data-title="Detail">
														<h3>{{ $book->book_language_name}}</h3>
													</td>
                                                    <td data-title="Detail">
                                                        @if($tags->count())
                                                            @foreach($tags as $tag)
                                                                @if($tag->book_id == $book->id)
                                                                    <span class="text-info">{{ $tag->book_tag_name}}, </span>
                                                                @endif
                                                            @endforeach
                                                        @endif
													</td>
-->
													
													<td data-title="Date">
														<time datetime="{{ $book->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $book->created_at)->format('d-M-y') }}</time>
<!--														<span>Published</span>-->
													</td>
													<td data-title="Action" >
														<div class="tg-btnsactions">
                                                            
<!--                                                            Status-->
															<a class="" href="{{route('update-book-status',['id' => $book->id])}}">
                                                                @if($book->status == 1)
                                                                    <span class="btn btn-success btn-sm" style="float: left; margin-top: 10px;">Active</span>
                                                                @endif
                                                                @if($book->status == 0)
                                                                      <span class="btn btn-danger btn-sm" style="float: left; margin-top: 10px;">Deactive</span>
                                                                @endif
                                                            </a>
                                                        
<!--                                                            Edit-->
															<a class="tg-btnaction tg-btnactionedit" href="{{route('edit-book',['id' => $book->id])}}"><i class="fa fa-pencil"></i></a>
                                                            <!--View-->
															<a class="tg-btnaction tg-btnactionedit" href="{{route('single-book',['id' => $book->id, 'name' => $book->book_name])}}"><i class="fa fa-eye"></i></a>
															
<!--                                                            Delete-->
                                                            <a id="{{ $book->id }}" class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);" onclick="event.preventDefault();

                                                                var confirmDelete = confirm('Are you sure to Delete? __('+'{{ $book->book_name }}'+')')
                                                                if(confirmDelete) {
                                                                document.getElementById('deleteId'+'{{ $book->id }}').submit();
                                                                }
                                                                "><i class="fa fa-trash"></i></a>
                                                          
                                                        <form id="deleteId{{ $book->id }}" action="{{ route('delete-book') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $book->id }}" name="id"/>
                                                        </form>
														</div>
													</td>
												</tr>
                                                
											</tbody>
										</table>
										
									</div>
								</div>
							</div>
						
				</div>
			</section>
			<!--************************************
					Section End
			*************************************-->
    
		
</main>

@endsection