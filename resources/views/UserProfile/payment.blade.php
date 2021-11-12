@extends('layouts.frontend.profile')
@section('body')
<div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="pcard mb-4">
						<div class="d-lg-flex justify-content-between align-items-center pcard-header">
							<div class="mb-3 mb-lg-0">
								<h3 class="mb-0">Current Plan</h3>
								<span>Below your current active plan information.</span>
							</div>
							<div>
								<a href="#" class="btn btn-outline-primary btn-sm">Switch to Annual Billing</a>
							</div>
						</div>
						<!-- Card body -->
						<div class="pcard-body">
							<h2 class="fw-bold mb-0">Price</h2>
							<p class="mb-0">
								Your next monthly charge of
								<span class="text-success">xyz price</span> will be applied to your
								primary payment method on
								<span class="text-success">July 20, 2020.</span>
							</p>
						</div>
					</div>
					<!-- Card -->
					<div class="pcard mb-4">
						<!-- Card header -->
						<div class="pcard-header">
							<h3 class="mb-0">Payment Methods</h3>
							<span>Primary payment method is used by default</span>
						</div>
						<!-- Card body -->
						<div class="pcard-body">
							<!-- List group -->
							<ul class="list-group list-group-flush">
								<!-- List group item -->
								<li class="list-group-item px-0 py-3">
									<div class="d-flex justify-content-between">
										<div class="d-flex">
											<img src="../assets/images/creditcard/americanexpress.svg" alt="" class="me-3">
											<div>
												<h5 class="mb-0">American Express ending in 1234</h5>
												<p class="mb-0 fs-6">Expires in 12/2021</p>
											</div>
										</div>
										<span class="dropdown dropstart">
											<a class="text-muted text-decoration-none" href="#" role="button" id="paymentDropdown3" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
												<i class="fe fe-more-vertical"></i>
											</a>
											<span class="dropdown-menu" aria-labelledby="paymentDropdown3">
												<span class="dropdown-header">Setting </span>
												<a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
												<a class="dropdown-item" href="#"><i class="fe fe-credit-card dropdown-item-icon"></i>Make it
													Primary</a>
											</span>
										</span>
									</div>
								</li>

							<!-- button-->
							<a href="#" class="btn btn-outline-primary mt-4" data-bs-toggle="modal" data-bs-target="#paymentModal">Add
								Payment Method</a>
						</div>
					</div>
				</div>
@endsection