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
										<a href="{{url('/publikasi/exportpdf',$publikasi->id)}}" class="btn btn-primary btn-sm">CETAK </a>
									
										
									</div>
								</div>
								
								<div class="panel-body">
									<table class="table table-hover">
										<tbody>
											<tr>
												
												
											</td>
											
											</tr>
										<tr>

											
											<td><b>Judul Publikasi</b></td>
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
											
											<td><b>Alamat Online </b></td>
											<td style="width:70%">{{$publikasi->alamat_online}}</td>
											<td>&nbsp</td>
											<td><b>Onedrive</b> </td>
											<td>{{$publikasi->onedrive}}</td>
										</tr>
										
										<tr>
											
											<td><b>Pengusul Dokumen</b></td>
											<td>{{$publikasi->user->name}}</td>
											<td>&nbsp</td>
											<td><b>dokumen</b> </td>

											<td><a href="{{url('/images/repo',$publikasi->dokumen)}}"> {{$publikasi->dokumen}} </td>
										</tr>
										<tr>
											
											<td><b>Status dari Puslitabmas</b></td>
											<td>{{$publikasi->puslitabmas}}</td>
											<td>&nbsp</td>
											<td><b>Program studi </b></td>
											<td>{{$publikasi->prodi}}</td>

											
										</tr>
										<tr>
											
											<td><b>Tanggal diketahui Direktur</b></td>
											<td>{{$publikasi->diketahui}}</td>
											<td>&nbsp</td>
											<td><b>Tanggal Pencairan dari WD II</b></td>
											<td>{{$publikasi->pencairan}}</td>
											
											
										</tr>
									
									
			

			</tbody>
		</table>
	<a href="/publikasi/disetujui"><button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> Kembali</button></a>
									
	</div>
</div>
</div>




</div>



							


							
								</div>
						</div>
							





						


		

			  </div>


@stop
