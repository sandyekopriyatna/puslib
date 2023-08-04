@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Tambah Data Publikasi</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Data Publikasi</h3>
								</div>

									<form action="/publikasi/create" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="panel-body">

								<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Judul Publikasi</label>
					    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="judul">
					    </div>

							<div class="form-group">
					    	<label for="exampleFormControlSelect1">Program Studi</label>
						<select name="prodi" class="form-control" aria-label="Default select example" >
							@foreach($data_prodi as $prodi)
						  <option value="{{$prodi->program_studi}}" >{{$prodi->program_studi}}</option>

						  @endforeach
						  
						  </select>
						</div>


					    <div class="form-group">
					    	<label for="exampleFormControlSelect1">Jenis Jurnal</label>
						<select name="id_harga" class="form-control" aria-label="Default select example" >
							@foreach($data_harga as $harga)
						  <option value="{{$harga->id}}" >{{$harga->nama}}</option>

						  @endforeach
						  
						  </select>
						</div>


							<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tanggal terbit </label>
					    <input type="date" name="tanggal_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>
					    
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Edisi </label>
					    <input type="text" name="edisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat online">
					    </div>
						
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">dokumen</label>
							  <input type="file" name="dokumen" class="form-control">
							</div>

						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">alamat online</label>
					    <input type="text" name="alamat_online" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat online">
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">onedrive </label>
					    <input type="text" name="onedrive" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat online">
					    </div>
					    

					    

					    
					    	
					   

						
					    <button type="submit" class="btn btn-warning ">Submit</button>

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

@push('after_scripts')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>



<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    $(document).ready(function(){
    	$('#lfm').filemanager('file');
    	});
   

   


</script>
			
<script type="text/javascript">
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endpush