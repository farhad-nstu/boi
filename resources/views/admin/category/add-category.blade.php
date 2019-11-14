@extends('admin.master')

@section('title')
    Add Category | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

<main id="tg-main" class="tg-main tg-haslayout">
		
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
					<form class="tg-formtheme tg-formdashboard">
						<fieldset>
							<div class="tg-postanad">
								
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
									
									<div class="tg-dashboardbox tg-contactdetail">
										<div class="tg-dashboardboxtitle">
											<h2>Category Details</h2>
										</div>
										<div class="tg-dashboardholder">
											<div class="form-group">
												<strong>Status</strong>
												<div class="tg-selectgroup">
													<span class="tg-radio">
														<input id="tg-sameuser" type="radio" name="status" value="Active" checked>
														<label for="tg-sameuser">Active</label>
													</span>
													<span class="tg-radio">
														<input id="tg-someoneelse" type="radio" name="status" value="Deactive">
														<label for="tg-someoneelse">Deactive</label>
													</span>
												</div>
											</div>
                                            
											<div class="form-group">
												<input type="text" name="category_name" class="form-control" placeholder="Category Name">
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