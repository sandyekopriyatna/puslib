@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Riwayat Kerja</h3>
									<div class="right">
										<a href="/kerja/insert" class="btn btn-success update-pro btn-sm">
									Tambah Data</a>
									
									</div>
								</div>
								<div class="panel-body">
									<table id="datatable1" class="table table-hover" id="datatable1">
										<thead>
											<tr>
												<th>Tanggal</th>
												<th>Customer Reference</th>																		
												<th>Project Name</th>
												<th>Quotation no</th>
												<th>Po No</th>
												<th>Job No</th>
												<th>Drawing No</th>
												<th>Quantity</th>
												
												<th>Target Delivery</th>
												<th>invoice</th>
												
											</tr>
										</thead>
										<tbody>
											@foreach($data_office as $office)
											
									<tr>
										<td>{{$office->tanggal}}</td>
										<td>{{$office->customer_reference}}</td>
										<td>{{$office->project_name}}</td>
										<td>{{$office->quotation_no}}</td>
										<td>{{$office->po_no}}</td>
										<td>{{$office->job_no}}</td>
										<td>{{$office->drawing_no}}</td>
										<td>{{$office->qty}}</td>
										
										<td>{{$office->target_delivery}}</td>
										<td>{{$office->invoice}}</td>
										
										
										
										
										
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
    			$('#datatable1').DataTable();


} );
			</script>

			@endpush