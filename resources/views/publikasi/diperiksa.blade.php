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
									<h3 class="panel-title">Data Publikasi yang Disetujui Puslibtabmas</h3>
									<div class="right">
										
									
									</div>
								</div>
								<div class="panel-body">
									<table id="datatable2" class="table table-hover" id="datatable1">
										<thead>
											<tr>
												<th>judul</th>
												<th>prodi</th>
												<th>jenis</th>																	
												
												<th>harga</th>
												<th>tanggal terbit</th>
												<th>edisi</th>
												
												
												<th>status</th>
												
											</tr>
										</thead>
										<tbody>
											@foreach($data_publikasi as $publikasi )
											
									<tr>
										
										
											
										
									</td>
										
									</td>
										<td><a href ="{{url('/publikasi/pencairan',$publikasi->id)}}">{{$publikasi ->judul}}</a></td>
										<td>{{$publikasi ->prodi}}</td>

										<td>{{$publikasi ->harga->nama}}</td>
										
										<td>{{$publikasi->harga->harga}}</td>
										<td>{{$publikasi ->tanggal_terbit}}</td>
										<td>{{$publikasi ->edisi}}</td>
										
										
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