@extends('admin.master')

@section('title')
    Manage Book | Admin | Boi Chakra
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
					<form class="tg-formtheme tg-formdashboard">
						<fieldset>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-dashboardbox">
									<div class="tg-dashboardboxtitle">
										<h2>All Posted Book</h2>
									</div>
                                    @if($books->count())
									<div class="tg-dashboardholder">
										<nav class="tg-navtabledata">
											<ul>
												<li class="tg-active"><a href="*">All ({{ \App\Book::count() }})</a></li>
												<li><a href="javascript:void(0);" data-category="active">Active ({{ \App\Book::where('status' , 1 )->count() }})</a></li>
												<li><a href="javascript:void(0);" data-category="inactive">Inactive ({{ \App\Book::where('status' , 0 )->count() }})</a></li>
                                                <li><a href="javascript:void(0);" data-category="inactive">Verified ({{ \App\Book::where('verified' , 1 )->count() }})</a></li>
                                                <li><a href="javascript:void(0);" data-category="inactive">Unverified ({{ \App\Book::where('verified' , 0 )->count() }})</a></li>

											</ul>
										</nav>

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
													<th>Cover</th>
													<th>Name</th>
                                                    <th>Posted by</th>
                                                    <th>Status</th>
                                                    <th>Added On</th>
                                                    <th>Action</th>
												</tr>
											</thead>

											<tbody>

                                                @php($i=1)

                                                @foreach($books as $book)

												<tr data-category="active">
                                                    <td>{{ $i++ }}</td>
													<td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adone" type="checkbox" name="myads" value="myadone">
															<label for="tg-adone"></label>
														</span>
													</td>
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
														@if($book->assigned == 0)
                                                            <span class="text-success">Available</span>
                                                            @endif

                                                            @if($book->assigned == 1)
                                                                <span class="text-danger">Picked</span>
                                                            @endif
													</td>

													<td data-title="Date">
														<time datetime="{{ $book->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $book->created_at)->format('d-M-y') }}</time>
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
												@endforeach
											</tbody>

										</table>

										@if($books->count())
											@endif

									</div>
                                    @else
                                        <h3 style="margin-top: 50px; color: red; margin-left: 20px;">No Books Found</h3>
                                    @endif

								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</section>
			<!--************************************
					Section End
			*************************************-->


</main>

@endsection