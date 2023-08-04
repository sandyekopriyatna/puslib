@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Tracer Studi Alumni</h3>
									<div class="right">
										
									
									</div>
								</div>
								<div class="panel-body">
									<table id="datatable1" class="table table-hover" id="datatable1">
										<thead>
											<tr>
												<th>NIM</th>
												<th>Nama</th>
												<th>Tempat Kerja</th>
												<th>Jabatan</th>
												
												
												<th>WAKTU</th>
												
												
												<td>&nbsp</td>
												
											</tr>
										</thead>
										<tbody>
											@foreach($data as $row)
											
									<tr>
										<td>{{$row->nim}}</td>
										<td>{{$row->nama_lengkap}}</td>
										
										<td>{{$row->tempat_kerja}}</td>
										<td>{{$row->jabatan}}</td>
										
										<td>{{$row->waktu}}</td>
										<td>&nbsp</td>
										
										
									</tr>
										@endforeach
										</tbody>
									</table>
									

								</div>
							</div>
				</div>
			</div>
		
		
	</div>

	</div>
</div>
<div class="col"-6>
			<!-- Button trigger modal -->
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
			<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" align="right">
			  Tambah Anggota
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
						<form action="/anggota/create" method="POST">
							{{csrf_field()}}

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">nama_lengkap</label>
					    <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>
					     
					    <div class="form-group">
					    	<label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-select" aria-label="Default select example">
						
						  <option value="L">Laki-laki</option>
						  <option value="P">Perempuan</option>
						  </select>
						</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
					    </div>
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
					    </div>

					 
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			         <button type="submit" class="btn btn-primary">Submit</button>
					</form>



			      </div>
			    </div>
			  </div>


			

@endsection

@push('after_scripts')


<script>

				
$(document).ready(function() {
    			$('#datatable1').DataTable();


} );
			</script>

			@endpush