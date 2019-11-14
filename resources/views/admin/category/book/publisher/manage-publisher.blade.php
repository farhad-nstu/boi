@extends('admin.master')

@section('title')
    Manage Publisher | Admin | Boi Chakra
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
										<h2>Publisher Details</h2>
									</div>
									<div class="tg-dashboardholder">
										<nav class="tg-navtabledata">
											<ul>
												<li class="tg-active"><a href="*">All ({{ \App\BookPublisher::count() }})</a></li>
												<li><a href="javascript:void(0);" data-category="active">Active ({{ \App\BookPublisher::where('status' , 1 )->count() }})</a></li>
												<li><a href="javascript:void(0);" data-category="inactive">Inactive ({{ \App\BookPublisher::where('status' , 0 )->count() }})</a></li>
												
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
													<th>Photo</th>
													<th>Name</th>
                                                    <th>Details</th>
                                                    <th>Status</th>
                                                    <th>Added On</th>
                                                    <th>Action</th>
												</tr>
                                              
											</thead>
											<tbody>
                                                
                                                @php($i=1)
                                                @foreach($publishers as $publisher)
                                                
												<tr data-category="active">
                                                    <td>{{ $i++ }}</td>
													<td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adone" type="checkbox" name="myads" value="myadone">
															<label for="tg-adone"></label>
														</span>
													</td>
													<td data-title="Photo">
                                                        @if($publisher->publisher_image)
                                                        <img style="height: 40px;" src="{{asset($publisher->publisher_image)}}">
                                                        @else
                                                        <img src="images/thumbnail/img-06.jpg">
                                                        @endif
                                                    </td>
													<td data-title="Title">
														<h3>{{ $publisher->publisher_name}}</h3>
													</td>
													<td data-title="Detail">
														<h3>{{ $publisher->publisher_details}}</h3>
													</td>
													<td data-title="Status">
                                                        
                                                        @if($publisher->status == 1)
                                                            <span class="tg-adstatus tg-adstatusactive">active</span>
                                                        @endif
                                                        
                                                        @if($publisher->status == 0)
                                                            <span class="tg-adstatus tg-adstatusdeleted">Deactive</span>
                                                        @endif
                                                        
                                                    </td>
													
													<td data-title="Date">
														<time datetime="{{ $publisher->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $publisher->created_at)->format('d-M-y') }}</time>
<!--														<span>Published</span>-->
													</td>
													<td data-title="Action">
														<div class="tg-btnsactions">
                                                            
<!--                                                            Status-->
															<a class="tg-btnaction tg-btnactionview" href="{{route('update-book-publisher-status',['id' => $publisher->id])}}">
                                                                @if($publisher->status == 0)
                                                                    <i class="fa fa-unlock"></i>
                                                                @endif
                                                                @if($publisher->status == 1)
                                                                    <i class="fa fa-lock"></i>
                                                                @endif
                                                            </a>
                                                        
<!--                                                            Edit-->
															<a class="tg-btnaction tg-btnactionedit" href="{{route('edit-book-publisher',['id' => $publisher->id])}}"><i class="fa fa-pencil"></i></a>
															
<!--                                                            Delete-->
                                                            <a id="{{ $publisher->id }}" class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);" onclick="event.preventDefault();

                                                                var confirmDelete = confirm('Are you sure to Delete? __('+'{{ $publisher->publisher_name }}'+')')
                                                                if(confirmDelete) {
                                                                document.getElementById('deleteId'+'{{ $publisher->id }}').submit();
                                                                }
                                                                "><i class="fa fa-trash"></i></a>
                                                          
                                                        <form id="deleteId{{ $publisher->id }}" action="{{ route('delete-book-publisher') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $publisher->id }}" name="id"/>
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
						</fieldset>
					</form>
				</div>
			</section>
			<!--************************************
					Section End
			*************************************-->
    
		
</main>

@endsection