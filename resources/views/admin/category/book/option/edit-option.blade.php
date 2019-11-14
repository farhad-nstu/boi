@extends('admin.master')

@section('title')
    Add Book Option | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

<main id="tg-main" class="tg-main tg-haslayout">
    
     @include('admin.include.message')
    
     @if(Session::has('failed-bookGenre'))
                    <div class="tg-alert alert alert-danger fade in">
                        <p><strong>{{Session::get('failed-bookGenre')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif
    @if(Session::has('failed-bookLanguage'))
                    <div class="tg-alert alert alert-danger fade in">
                        <p><strong>{{Session::get('failed-bookLanguage')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif
    @if(Session::has('failed-bookTag'))
                    <div class="tg-alert alert alert-danger fade in">
                        <p><strong>{{Session::get('failed-bookTag')}}</strong></p>
                        <div class="tg-anchors">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                        </div>
                    </div>
                    @endif
		
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
					<form class="tg-formtheme tg-formdashboard" action="{{ route('new-book-option')}}" method="post">
                        @csrf
						<fieldset>
							<div class="tg-postanad">
								
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
									
									<div class="tg-dashboardbox tg-contactdetail">
										<div class="tg-dashboardboxtitle">
											
											<h2 style="margin-left: 10px;">Here you can add: Genre, Language, Tag.</h2>
										</div>
										<div class="tg-dashboardholder">
											
<!--                                            Book Category ID-->
                                            <input type="hidden" name="category_id" value="1">
                                            
											<div class="form-group">
												<input type="text" name="book_genre_name" class="form-control" placeholder="Enter Genre Name..">
											</div>
                                            <div><p style="text-align: center;">Or</p></div>
                                            <div class="form-group">
												<input type="text" name="book_language_name" class="form-control" placeholder="Enter Language Name..">
											</div>
                                            <div><p style="text-align: center;">Or</p></div>
                                            <div class="form-group">
												<input type="text" name="book_tag_name" class="form-control" placeholder="Enter Tag Name..">
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