@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Change Password</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Input Password</h3>
								</div>

									<form action="{{route('password.update')}}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}



						<div class="panel-body">
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Old Password</label>
					    <input type="password" name="oldpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    @error('oldpassword')
					    <span class="text-danger">{{$message}}</span>
					    @enderror

					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">New Password</label>
					    <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp"  >
					    @error('password')
					    <span class="text-danger">{{$message}}</span>
					    @enderror
					    </div>
					     

					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Confirm New Password</label>
					    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" aria-describedby="emailHelp"  >
					    @error('password_confirmation')
					    <span class="text-danger">{{$message}}</span>
					    @enderror
					    </div>

					    
					     <button type="submit" class="btn btn-warning ">Submit</button>

					 </form>
						
					 
						
				</div>
			</div>
				
			</div>
		</div>
				




		</div>
	</div>
</div>


@stop
@section('content1')
	<h1> Edit Data Anggota </h1>
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
	<div class="row">
		<div class="col-lg-12">
		
		
</div>



</div>
@endsection