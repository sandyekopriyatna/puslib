@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Publikasi </h3>
									<div class="right">
										<a href="/publikasi/insert" class="btn btn-success update-pro btn-sm">
									Tambah Data</a>
									
									</div>
								</div>
								<div class="panel-body">
									<table id="datatable2" class="table table-hover" id="datatable1">
										<thead>
											<tr>
												<th>No</th>
												<th>judul</th>
												<th>pengusul</th>
												
												<th>prodi</th>
												<th>jenis</th>																	
												
												
												<th>tanggal dibuat</th>
												
												
												
												<th>status</th>
												
											</tr>
										</thead>
										<tbody>
											@foreach($data_publikasi as $publikasi )
											
									<tr>
										
										
											
										
									</td>
										
									</td>
									<td>{{$loop->iteration}}</td>
									<td><a href ="/publikasi/{{$publikasi->id}}/profile">{{$publikasi ->judul}}</a></td>
									<td>{{$publikasi ->user->name}}</td>
									
										<td>{{$publikasi ->prodi}}</td>
										<td>{{$publikasi ->harga->nama}}</td>
										
										<td>{{$publikasi ->created_at}}</td>
										
										
										
										<td>{{$publikasi ->status}}</td>
										
										
										
										
										
										
									</td>
									</tr>
										@endforeach
									

								</div>
								</div>
				</div>
			</div>
		
		
	</div>

	</div>
</div>


			

@endsection

@push('after_scripts')


<script>

				
$(document).ready(function() {
    			$('#datatable2').DataTable();


} );
			</script>

			@endpush