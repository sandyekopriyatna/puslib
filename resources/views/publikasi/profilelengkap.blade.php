@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">

			<h1 class="panel-title"><center>Data Publikasi</h1></center>
			<br>
			

			<div class="row">


				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Publikasi</h3>


									<div class="right">
										<a href="{{url('/publikasi/exportpr',$publikasi->id)}}" class="btn btn-primary btn-sm">CETAK PR </a>
										<a href="{{url('/publikasi/exportpdf',$publikasi->id)}}" class="btn btn-primary btn-sm">CETAK HASIL</a>
									
										
									</div>
								</div>
								
								<div class="panel-body">
									<table class="table table-hover">
										<tbody>
											<tr>
												
												
											</td>
											
											</tr>
										<tr>

											
											<td><b>Judul Publikasi </b></td>
											<td>{{$publikasi->judul}}</td>
											<td>&nbsp</td>
											<td><b>jenis</b> </td>
											<td>{{$publikasi ->harga->nama}}</td>

										</tr>
										<tr>
											
											<td><b>Kode </b></td>
											<td>{{$publikasi->harga->kode}}</td>
											<td>&nbsp</td>
											<td><b>harga</b> </td>
											<td>{{$publikasi->harga->harga}}</td>
										</tr>
										<tr>
											
											<td><b>Tanggal Terbit </b></td>
											<td>{{$publikasi->tanggal_terbit}}</td>
											<td>&nbsp</td>
											<td><b>Edisi</b> </td>
											<td>{{$publikasi->edisi}}</td>
										</tr>
										<tr>
											
										<td><b>Pengusul Dokumen</b></td>
											<td>{{$publikasi->user->name}}</td>
											<td>&nbsp</td>
												<td><b>Status dari Puslitabmas</b></td>
											<td>{{$publikasi->status}}</td>
										</tr>
										
										<tr>
											<td><b>Tanggal diketahui Direktur</b></td>
											<td>{{$publikasi->diketahui}}</td>
											
											<td>&nbsp</td>
											<td><b>Tanggal Pencairan dari WD II</b></td>
											<td>{{$publikasi->pencairan}}</td>
											
										</tr>
										<tr>
											
										
											<td><b>dokumen</b> </td>

											<td ><a href="{{url('/images/repo',$publikasi->dokumen)}}"> {{$publikasi->dokumen}} </td>
											
											<td>&nbsp</td>
											<td><b>Program studi </b></td>
											<td>{{$publikasi->prodi}}</td>
										</tr>
										<tr>
											
											
												<td><b>Alamat Online </b></td>
											<td colspan="5">{{$publikasi->alamat_online}}</td>
											<td>&nbsp</td>
											
											
										</tr>
										<tr>
											
											
											<td><b>Onedrive</b> </td>
											<td colspan="5" rowspan="3">{{$publikasi->onedrive}}</td>
											<td>&nbsp</td>
											
											
										</tr>
									
									
									
			

			</tbody>
		</table>
	
	</div>
</div>
</div>



<div class="row">


				<div class="col-md-12">
					<div class="panel">
								
								
								<div class="panel-body">
									<table class="table table-hover">
										
										<thead>
											<tr>
												
												<th>Time</th>
												<th>User</th>																	
												
												<th>Description</th>
												
												
											</tr>
										</thead>
										<tbody>
										
											
									<tr>

										<td>{{$publikasi ->puslitabmas}}</a></td>

										<td>Frangky Silitonga</td>
										
										<td>Dokumen has been approved</td>
									</tr>
									<tr>
										<td>{{$publikasi ->wadir2}}</a></td>

										<td>Syafruddin Rais</td>
										
										<td>Dokumen has been verified</td>
									</tr>
									<tr>
										<td>{{$publikasi ->direktur}}</a></td>

										<td>M Nur Nasution</td>
										
										<td>Dokumen has been verified</td>
									</tr>
									
									
									
									
			

			</tbody>
		</table>
	<a href="/publikasi/lengkap"><button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> Kembali</button></a>
		</form>
	</div>
</div>
</div>



							


							
								</div>
						</div>
							





						


		

			  </div>


@stop
