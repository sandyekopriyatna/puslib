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
											<td>{{$publikasi->alamat_online}}</td>
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
											
											<td><b>Status</b></td>
											<td>{{$publikasi->status}}</td>
											<td>&nbsp</td>
											<td><b>Tanggal Pencairan</b></td>
											<td>{{$publikasi->pencairan}}</td>
										</tr>
										<td><b>Diketahui Direktur</b></td>
											<td>{{$publikasi->diketahui}}</td>
											<td>&nbsp</td>
											<td><b>Program studi </b></td>
											<td>{{$publikasi->prodi}}</td>
									
			

			</tbody>
		</table>
	<a href="{{url('approved',$publikasi->id)}}"><button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> Kirim link WD II</button></a>
	<a href="{{url('linkdir',$publikasi->id)}}"><button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> Kirim link direktur</button></a>
		</form>
	</div>
</div>
</div>



							


							
								</div>
						</div>
							





						


		

			  </div>


@stop
