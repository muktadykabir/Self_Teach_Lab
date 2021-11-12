@extends('layouts.frontend.profile')
@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Profile</title>
</head>
<body>
    <div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="pcard">
						<!-- Card header -->
						<div class="pcard-header">
							<h3 class="mb-0">Profile Information</h3>
							<p class="mb-0">
								You have full control to manage your own account setting.
							</p>
						</div>
						<!-- Card body -->
						<div class="pcard-body">
							<div class="d-lg-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center mb-4 mb-lg-0">
									<div class="wrapper">
									@foreach ($users as $user)
                                        <img src="{{asset('images')}}/{{$user->profileimage}}" id="img-uploaded" class="avatar-xl rounded-circle" alt="">
                                    @endforeach
									@foreach ($users as $user)
												<td>{{$user->first_name}}
												{{$user->last_name}}</td>
											@endforeach
                                    </div>
							
								</div>
							
							</div>
							<hr class="my-5">
							<div>
								
								<h4 class="mb-0">Personal Information</h4>
								<p class="mb-4">
									Edit your personal information and address.
								</p>
								<!-- Form -->
                               
                             
                            @if (session('user_updated'))
							   <div class="alert alert-success" role="alert">
                                    {{Session::get('user_updated')}}
                                </div>
										@endif



                                       
							 @foreach ($users as $user)
                                <form method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="mb-3 col-12 col-md-6">
										<label for="file">Upload Image</label>
										<input type="file" name="file" id="profileimage" class="form-control" onchange="previewFile(this)" required="">
                                        
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="first_name">First Name</label>
										<input type="text" name="first_name" id="first_name" placeholder="{{$user->first_name}}" class="form-control" required="">
									</div>
                                    <div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="last_name">Last Name</label>
										<input type="text" name="last_name" id="last_name" placeholder="{{$user->last_name}}" class="form-control" required="">
									</div>
									
                                    <div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="number">Number</label>
										<input type="text" name="number" class="form-control" placeholder="{{$user->number}}" required="">
									</div>
                                    <div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="dateofBirth">Date Of Birth</label>
										<input type="date" name="dateofbirth" class="form-control" placeholder="{{$user->dateofbirth}}" required="">
									</div>
                                    <div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="address1">Address 1</label>
										<input type="text" name="address1" class="form-control" placeholder="{{$user->address1}}" required="">
									</div>
                                    <div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="address2">Address 2</label>
										<input type="text" name="address2" class="form-control" placeholder="{{$user->address2}}" required="">
									</div>
                                    <div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="state">State</label>
										<input type="text" name="state" class="form-control" placeholder="{{$user->state}}" required="">
									</div>
                                    <div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="country">Country</label>
										<input type="text" name="country" class="form-control" placeholder="{{$user->country}}" required="">
									</div>

                                    <button id="update" class="btn btn-primary" type="submit">
											Update Profile
										</button>
										
                                            @endforeach
                                </form>
								
							</div>
						</div>
					</div>
				</div>
                <script>
                    function previewFile(input){
                        var file=$("input[type=file]").get(0).files[0];
                        if(file)
                        {
                            var reader = new FileReader();
                            reader.onload = function(){
                                $(#profileimage).attr("src",reader.result);
                            }
                            reader.readAsDataURL(file);
                        }
                    }
                </script>
    
</body>
</html>
    
@endsection