@extends('admin.master')

@section('title')
    Edit Category | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

<main id="tg-main" class="tg-main tg-haslayout">
    

		
    
    @include('admin.include.message')
    
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
                   
					<form class="tg-formtheme tg-formdashboard" action="{{ route('update-book-category') }}" method="post">
                            @csrf
						<fieldset>
							<div class="tg-postanad">
								
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
									
									<div class="tg-dashboardbox tg-contactdetail">
										<div class="tg-dashboardboxtitle">
											<h2>Edit Category Details</h2>
										</div>
										<div class="tg-dashboardholder">
											
<!--                                            Book Category ID-->
                                            <input type="hidden" name="category_id" value="{{ $category->category_id}}">
                                            
<!--                                            Book Writer ID-->
                                            <input type="hidden" name="id" value="{{ $category->id}}">
                                            
                                            <div class="form-group">
												<strong>Change Status</strong>
												<div class="tg-selectgroup">
													<span class="tg-radio">
														<input id="tg-sameuser" type="radio" name="status" value="1" {{ $category->status == 1 ? 'checked' : '' }}>
														<label for="tg-sameuser">Active</label>
													</span>
													<span class="tg-radio">
														<input id="tg-someoneelse" type="radio" name="status" value="0" {{ $category->status == 0 ? 'checked' : '' }}>
														<label for="tg-someoneelse">Deactive</label>
													</span>
												</div>
											</div>
                                            
											<div class="form-group">
												<input type="text" name="book_category_name" class="form-control" value="{{ $category->book_category_name}}">
											</div>
                                            

											<button class="tg-btn" type="submit">Save</button>
                                            
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</section>
		
</main>

@endsection