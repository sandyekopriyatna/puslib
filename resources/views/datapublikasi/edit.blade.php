@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Data Alumni</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Data Alumni</h3>
								</div>

									<form action="/anggota/{{$anggota->id}}/update" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}



						<div class="panel-body">
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
					    <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$anggota->nama_lengkap}}" >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">NIM</label>
					    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$anggota->nim}}">
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tempat/Tanggal Lahir</label>
					    <input type="text" name="lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$anggota->lahir}}">
					    </div>
					     <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Email</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$anggota->email}}">
					    </div>

						
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" value="">{{$anggota->alamat}}</textarea>
							</div>
						<div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Avatar</label>
							  <input type="file" name="avatar" class="form-control" value="{{$anggota->avatar}}">
							</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">agama</label>
					    <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$anggota->nama_lengkap}}" >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">nomor hp</label>
					    <input type="text" name="hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$anggota->hp}}" >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tahun lulus</label>
					    <input type="text" name="tahun_lulus" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$anggota->tahun_lulus}}" >
					    </div>



										</div>
									</div>
								</div>
									
								</div>
							</div>
									
					    <button type="submit" class="btn btn-warning ">Submit</button>

					 </form>
												
													</div>
									</div>
								</div>


						

							<br>
							
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
			
			      
						<form action="" method="POST">
							{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
					    <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" >
					    </div>
					     <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
					    <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" >
					    </div>
					    <div class="form-group">
					    	<label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-select" aria-label="Default select example" >
						
						  <option value="L" </option>
						  <option value="P" </option>
						  </select>
						</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" >
					    </div>
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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