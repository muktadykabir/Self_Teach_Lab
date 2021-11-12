@extends('layouts.frontend.profile')
@section('body')
<div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="pcard mb-4">
						<!-- Card header -->
						<div class="pcard-header">
							<div class="mb-lg-0 mb-3">
								<h3 class="mb-1">Billing Address</h3>
								<span>Changes to your billing infomration will take effect
									starting with scheduled payment and will be refelected on
									your next invoice.</span>
							</div>
						</div>
						<!-- Card body -->
						<div class="pcard-body">
							<!-- List group -->
							<ul class="list-group list-group-flush mb-4">
								<!-- List group item  -->
								<li class="list-group-item px-0 pt-0 pb-4">
									<div class="row">
										<div class="col">
											<div class="form-check">
												<input type="radio" id="customRadio1" name="address1" class="form-check-input">
												<label class="form-check-label" for="customRadio1"><span class="h4"><p style="color:black">Billing Address
														#1</p></span>
													<span class="d-block">
														<p style="color:black">
														@foreach ($users as $user)
															<td>{{$user->address1}}</td>
														@endforeach
														</p>
													</span>
												</label>
											</div>
										</div>
										<div class="col-auto">
											<a href="editprofile" class="btn btn-outline-white btn-sm">Edit Address</a>
										</div>
									</div>
								</li>
								<li class="list-group-item px-0 pt-0 pb-4">
									<div class="row">
										<div class="col">
											<div class="form-check">
												<input type="radio" id="customRadio1" name="address1" class="form-check-input">
												<label class="form-check-label" for="customRadio1"><span class="h4"><p style="color:black">Billing Address
														#2</p></span>
													<span class="d-block">
														<p style="color:black">
														@foreach ($users as $user)
															<td>{{$user->address2}}</td>
														@endforeach
														</p>
													</span>
												</label>
											</div>
										</div>
										<div class="col-auto">
											<a href="editprofile" class="btn btn-outline-white btn-sm">Edit Address</a>
										</div>
									</div>
								</li>
							</ul>
							<!-- button -->
							<a href="#" class="btn btn-primary mb-5"> Add New Address </a>
							
						</div>
					</div>
				</div>
@endsection