@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">

			


			<div class="row">
				<div class="col-md-12">
					<div class="panel">
					
								<div class="panel-heading">
									<h3 class="panel-title">Data Pengguna Website</h3>
									<div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary"> Tambah Data</i></button>
									</div>
									
								</div>
								<div class="panel-body">
									<table  id="datatable1" class="table table-hover">
										<thead>
											<tr>
												<th>NAMA PENGGUNA</th>
												<th>EMAIL</th>
												
												
												<th>ROLE</th>
												
												
												<td>&nbsp</td>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_user as $user)
											
									<tr>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->role}}</td>
										
										
										<td>&nbsp</td>
										
										<td><a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
										<a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm delete	" onclick="return confirm('Yakin mau dihapus?')">DELETE</a>
										
									</td>
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
			  Tambah User
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
						<form action="/user/create" method="POST">
							{{csrf_field()}}

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama</label>
					    <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>

					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">NIDN</label>
					    <input type="text" name="nidn" class="form-control"  aria-describedby="emailHelp" placeholder="Nomor Induk Dosen">
					    </div>
					    			   
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Email</label>
					    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Password</label>
					    <input name="password" type="password" class="form-control" aria-describedby="emailHelp" placeholder="email">
					    </div>
					    <div class="form-group">
					    	<label for="exampleInputEmail1" class="form-label">Pilih role pengguna</label>
						<select name="role" class="form-select" aria-label="Default select example">
							<option value="dosen">dosen</option>
						  <option value="admin">admin</option>
						  <option value="puslib">puslib</option>
						  <option value="keuangan">keuangan</option>
						  
						  </select>
						</div>
						

					 
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			         <button type="submit" class="btn btn-primary berhasil">Submit</button>
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
