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

									<form action="/user/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}



						<div class="panel-body">
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
					    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->name}}" >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Email</label>
					    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}" >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">NIDN</label>
					    <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->nidn}}" >
					    </div>

					    <div class="form-group">
					    	<label for="exampleInputEmail1" class="form-label">Pilih role pengguna</label>
						<select name="role" class="form-select" aria-label="Default select example">
						
						  <option value="admin">admin</option>
						  <option value="puslib">puslib</option>
						  <option value="keuangan">keuangan</option>
						  <option value="dosen">dosen</option>
						  <option value="wd2">wd2</option>
						  <option value="direktur">direktur</option>

						  </select>
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