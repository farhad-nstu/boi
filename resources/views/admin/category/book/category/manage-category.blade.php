@extends('admin.master')

@section('title')
    Manage Book Category | Admin | Boi Chakra
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
										<h2>Book Category Details</h2>
									</div>
									<div class="tg-dashboardholder">
										<nav class="tg-navtabledata">
											<ul>
												<li class="tg-active"><a href="*">All ({{ \App\BookCategory::count() }})</a></li>
												<li><a href="javascript:void(0);" data-category="active">Active ({{ \App\BookCategory::where('status' , 1 )->count() }})</a></li>
												<li><a href="javascript:void(0);" data-category="inactive">Inactive ({{ \App\BookCategory::where('status' , 0 )->count() }})</a></li>
												
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
													<th>Name</th>
                                                    <th>Status</th>
                                                    <th>Added On</th>
                                                    <th>Action</th>
												</tr>
                                              
											</thead>
											<tbody>
                                                
                                                @php($i=1)
                                                @foreach($categories as $category)
                                                
												<tr data-category="active">
                                                    <td>{{ $i++ }}</td>
													<td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adone" type="checkbox" name="myads" value="myadone">
															<label for="tg-adone"></label>
														</span>
													</td>
													
													<td data-title="Title">
														<h3>{{ $category->book_category_name}}</h3>
													</td>
													
													<td data-title="Status">
                                                        
                                                        @if($category->status == 1)
                                                            <span class="tg-adstatus tg-adstatusactive">active</span>
                                                        @endif
                                                        
                                                        @if($category->status == 0)
                                                            <span class="tg-adstatus tg-adstatusdeleted">Deactive</span>
                                                        @endif
                                                        
                                                    </td>
													
													<td data-title="Date">
														<time datetime="{{ $category->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $category->created_at)->format('d-M-y') }}</time>

													</td>
													<td data-title="Action">
														<div class="tg-btnsactions">
                                                            
<!--                                                            Status-->
															<a class="tg-btnaction tg-btnactionview" href="{{route('update-book-category-status',['id' => $category->id])}}">
                                                                @if($category->status == 0)
                                                                    <i class="fa fa-unlock"></i>
                                                                @endif
                                                                @if($category->status == 1)
                                                                    <i class="fa fa-lock"></i>
                                                                @endif
                                                            </a>
                                                        
<!--                                                            Edit-->
															<a class="tg-btnaction tg-btnactionedit" href="{{route('edit-book-category',['id' => $category->id])}}"><i class="fa fa-pencil"></i></a>
															
<!--                                                            Delete-->
                                                            <a id="{{ $category->id }}" class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);" onclick="event.preventDefault();

                                                                var confirmDelete = confirm('Are you sure to Delete? __('+'{{ $category->book_category_name }}'+')')
                                                                if(confirmDelete) {
                                                                document.getElementById('deleteId'+'{{ $category->id }}').submit();
                                                                }
                                                                "><i class="fa fa-trash"></i></a>
                                                          
                                                        <form id="deleteId{{ $category->id }}" action="{{ route('delete-book-category') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $category->id }}" name="id"/>
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