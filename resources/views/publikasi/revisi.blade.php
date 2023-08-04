@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Data Publikasi yang ditolak</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Data Alumni</h3>
								</div>

									<form action="/publikasi/{{$publikasi->id}}/updaterevisi" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}



						<div class="panel-body">

					  <div class="form-group">
					    	<label for="exampleFormControlSelect1">Program Studi</label>
						<select name="prodi" class="form-control" aria-label="Default select example" >
						  <option value="Food and Beverage Management " @if($publikasi->prodi == 'Food and Beverage Management') selected @endif> Food and Beverage Management</option>
						  <option value="Room Division Management " @if($publikasi->prodi == 'Room Division Management') selected @endif> Room Division Management</option>
						   <option value="Culinary Management " @if($publikasi->prodi == 'Culinary Management') selected @endif> Culinary Management</option>
						  </select>
						</div>
					    
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tanggal terbit </label>
					    <input type="date" name="tanggal_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$publikasi->tanggal_terbit}}">
					    </div>

					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Edisi </label>
					    <input type="text" name="edisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat online" value="{{$publikasi->edisi}}" >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">alamat online</label>
					    <input type="text" name="alamat_online" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat online" value="{{$publikasi->alamat_online}}">
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">onedrive </label>
					    <input type="text" name="onedrive" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat online" value="{{$publikasi->onedrive}}">
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
	



</div>
@endsection