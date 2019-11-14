<section class="tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
							<div class="tg-categoriessearch">
								<div class="tg-title">
									<h2><span>Top</span> Contributor</h2>
								</div>
								<div id="tg-categoriesslider" class="tg-categoriesslider tg-categories owl-carousel">
									@foreach($users as $user)
										<div class="tg-category">
											<div class="tg-categoryholder">
												<figure><img src="{{ asset('') }}images/classifiedpro/icons/img-08.png" alt="image description"></figure>
												<h3>{{ $user->name }}</h3>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>