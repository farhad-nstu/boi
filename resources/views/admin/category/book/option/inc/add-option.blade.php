<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
					<form class="tg-formtheme tg-formdashboard" action="{{ route('new-book-option')}}" method="post">
                        @csrf
						<fieldset>
							<div class="tg-postanad">
								
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<div class="tg-dashboardbox tg-contactdetail">
										<div class="tg-dashboardboxtitle">
											
											<h2 style="margin-left: 10px;">Add Genre <strong>Or</strong> Language <span><strong>Or</strong></span> Tag.</h2>
										</div>
										<div class="tg-dashboardholder">
											
<!--                                            Book Category ID-->
                                            <input type="hidden" name="category_id" value="1">
                                            
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" name="book_genre_name" class="form-control" placeholder="Enter Genre Name..">
                                                </div>    
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" name="book_language_name" class="form-control" placeholder="Enter Language Name..">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" name="book_tag_name" class="form-control" placeholder="Enter Tag Name..">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                               <button class="tg-btn" type="submit">Save Now</button>
                                            </div>
											
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</section>