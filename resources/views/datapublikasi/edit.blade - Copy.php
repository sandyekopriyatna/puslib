@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel-body">
									<form action="/anggota/{{$anggota->id}}/update" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
					    <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$anggota->nama_depan}}">
					    </div>
					     <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
					    <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$anggota->nama_belakang}}">
					    </div>
					    <div class="form-group">
					    	<label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control" aria-label="Default select example" >
						
						  <option value="L" @if($anggota->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
						  <option value="P" @if($anggota->jenis_kelamin == 'P') selected @endif>Perempuan</option>
						  </select>
						</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$anggota->agama}}">
					    </div>
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$anggota->alamat}}</textarea>
							</div>
						<div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Avatar</label>
							  <input type="file" name="avatar" class="form-control">
							  
							</div>

							<br>
							<button type="submit" class="btn btn-warning ">Update</button>

					 </form>
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
		
			<!-- Modal -->
			
			      
						<form action="/anggota/{{$anggota->id}}/update" method="POST">
							{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
					    <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$anggota->nama_depan}}">
					    </div>
					     <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
					    <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$anggota->nama_belakang}}">
					    </div>
					    <div class="form-group">
					    	<label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-select" aria-label="Default select example" >
						
						  <option value="L" @if($anggota->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
						  <option value="P" @if($anggota->jenis_kelamin == 'P') selected @endif>Perempuan</option>
						  </select>
						</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$anggota->agama}}">
					    </div>
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$anggota->alamat}}</textarea>
							</div>
							<br>
							<button type="submit" class="btn btn-warning ">Update</button>

					 </form></div>

			      	
			         
					
				</div>
			    </div>
			</div>
		</div>
</div>



</div>
@endsection