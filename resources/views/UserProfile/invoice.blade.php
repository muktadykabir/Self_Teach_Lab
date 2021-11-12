@extends('layouts.frontend.profile')
@section('body')
<div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="pcard mb-4">
						<!-- Card header -->
						<div class="pcard-header border-bottom-0">
							<h3 class="mb-0">Invoices</h3>
							<p class="mb-0">You can find all of your Invoices.</p>
						</div>
						<!-- Table -->
						<div class="table-invoice table-responsive border-0">
							<table class="table mb-0 text-nowrap">
								<thead class="table-light">
									<tr>
										<th scope="col" class="border-bottom-0">Quiz ID</th>
										<th scope="col" class="border-bottom-0">DATE</th>
										<th scope="col" class="border-bottom-0">Price</th>
										<th scope="col" class="border-bottom-0">status</th>
										<th scope="col" class="border-bottom-0">Download</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										
										@foreach ($users as $user)
		
										<td><a href="invoice-details.html">{{$user->id}}</a></td>
										<td>{{$user->created_at}}</td>
										<td>$39.00</td>
										<td><span class="badge bg-danger">Due</span></td>
										<td> <a href="{{asset('asset/images/pdf/invoice.pdf')}}" class="fe fe-download" download=""><button class="btn btn-success"> Download </button></a> </td>
										<td>
											
										</td>
										
										@endforeach
									</tr>
									<tr>
										
										@foreach ($users as $user)
		
										<td><a href="invoice-details.html">{{$user->id}}</a></td>
										<td>{{$user->created_at}}</td>
										<td>$39.00</td>
										<td><span class="badge bg-success">Complete</span></td>
										<td> <a href="{{asset('asset/images/pdf/invoice.pdf')}}" class="fe fe-download" download=""><button class="btn btn-success"> Download </button></a> </td>

										@endforeach
									</tr>
									<tr>
										
										@foreach ($users as $user)
		
										<td><a href="invoice-details.html">{{$user->id}}</a></td>
										<td>{{$user->created_at}}</td>
										<td>$39.00</td>
										<td><span class="badge bg-danger">Due</span></td>
										<td> <a href="{{asset('asset/images/pdf/invoice.pdf')}}" class="fe fe-download" download=""><button class="btn btn-success"> Download </button></a> </td>

										@endforeach
									</tr>
									<tr>
										<td><a href="invoice-details.html">{{$user->id}}</a></td>
										<td>{{$user->created_at}}</td>
										<td>$39.00</td>
										<td>
											<span class="badge bg-success">Complete</span>
										</td>
										<td> <a href="{{asset('asset/images/pdf/invoice.pdf')}}" class="fe fe-download" download=""><button class="btn btn-danger" type="hidden"> Download </button></a> </td>

									</tr>
									
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection