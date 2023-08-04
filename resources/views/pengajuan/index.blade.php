@extends('layouts.master')

@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Publikasi </h3>
									<div class="right">
										
									
									</div>
								</div>
								<div class="panel-body">
									<table id="datatable1" class="table table-hover" id="datatable1">
										<thead>
											<tr>
												<th>No</th>
												<th>Judul</th>
												<th>Pengusul</th>
												
												<th>Prodi</th>
												<th>Jenis</th>																	
												
												<th>Tanggal Pengajuan</th>
												
												
												
												
												<th>status</th>
												<th>Terima </th>
												<th>Cancel </th>
												
											</tr>
										</thead>
										<tbody>
											@foreach($data_publikasi as $publikasi )
											
									<tr>
										
										
										
										
									
									<td>{{$loop->iteration}}</td>
										<td><a href ="/datapublikasi/{{$publikasi->id}}/profile">{{$publikasi ->judul}}</a></td>
										<td>{{$publikasi ->user->name}}</td>
										<td>{{$publikasi ->prodi}}</td>
										<td>{{$publikasi ->harga->nama}}</td>
										
										<td>{{$publikasi ->created_at}}</td>
										
										
										
										<td>{{$publikasi ->status}}</td>
										
											<td><a href="{{url('approved',$publikasi->id)}}" class="btn btn-success btn-sm">Terima</a></td>
										<td><a href="{{url('tolak',$publikasi->id)}}" class="btn btn-danger btn-sm delete	" onclick="return confirm('Yakin mau ditolak?')">Tolak</a></td>
										
										
										
										
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


			

@endsection

@push('after_scripts')


<script>

				
$(document).ready(function() {
    			$('#datatable1').DataTable();


} );
			</script>

			@endpush