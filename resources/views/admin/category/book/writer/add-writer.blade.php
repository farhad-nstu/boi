@extends('admin.master')

@section('title')
    Add Writer | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

<main id="tg-main" class="tg-main tg-haslayout">
    

		
    
    @include('admin.include.message')
    
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
                   
					<form class="tg-formtheme tg-formdashboard" action="{{ route('new-book-writer') }}" method="post" enctype="multipart/form-data">
                            @csrf
						<fieldset>
							<div class="tg-postanad">
								
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
									
									<div class="tg-dashboardbox tg-contactdetail">
										<div class="tg-dashboardboxtitle">
											<h2>Add Writer Details</h2>
										</div>
										<div class="tg-dashboardholder">
											
<!--                                            Book Category ID-->
                                            <input type="hidden" name="category_id" value="1">
                                            
											<div class="form-group">
												<input type="text" name="writer_name" class="form-control" placeholder="Writer Name">
											</div>
                                            
                                            <div class="form-group">
												<textarea type="text" name="writer_details" class="form-control"></textarea>
											</div>
                                            
                                            <div class="form-group">
												<strong>Writer Image</strong>
												<input  type="file" name="writer_image" accept="image/*">
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