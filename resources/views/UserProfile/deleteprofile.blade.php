@extends('layouts.frontend.profile')
@section('body')


<div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="pcard">
						<!-- Card header -->
						<div class="pcard-header">
							<h3 class="mb-0">Delete your account</h3>
							<p class="mb-0">Delete or Close your account permanently.</p>
						</div>
						<!-- Card body -->
						<div class="pcard-body p-4">
							<span class="text-danger h4">Warning</span>
							<p>
								If you close your account, you will be unsubscribed from all
								your 0 courses, and will lose access forever.
							</p>
							<a href="logout" class="btn btn-outline-danger btn-sm">Close My Account</a>
						</div>
					</div>
				</div>

@endsection