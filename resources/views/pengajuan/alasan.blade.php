@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Edit Data User</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Data Diri</h3>
								</div>

									<form action="/pengajuan/{{$publikasi->id}}/updatealasan" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}



						<div class="panel-body">
					  <div class="form-group">
							    <label for="exampleFormControlTextarea1">Alasan Penolakan</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alasan"></textarea>
							  </div>
							</form>



					    
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