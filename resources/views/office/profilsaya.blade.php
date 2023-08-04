@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">

			<h3 class="panel-title"><center>Data Anggota Alumni</h3></center>
			<br>
			<div class="row">

				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Biodata</h3>
									<div class="right">
										<div class="text-center"><a href="/anggota/{{auth()->user()->anggota->id}}/editalumni" class="btn btn-primary">Edit Profile</a></div>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<tbody>
											<tr>
												<td rowspan="7" width="60px">
												<img class="picture-frame" width="150" src="{{auth()->user()->anggota->getAvatar()}}">
											</td>
											
											</tr>
										<tr>
											
											<td><b>Nama Lengkap </b></td>
											<td>{{auth()->user()->anggota->nama_lengkap}}</td>
											<td>&nbsp</td>
											<td><b>NIM</b> </td>
											<td>{{auth()->user()->anggota->nim}}</td>

										</tr>
										<tr>
											<td><b>Tempat/Tanggal Lahir</b> </td>
											<td>{{auth()->user()->anggota->lahir}}</td>
											<td>&nbsp</td>
											<td><b>Alamat</b> </td>
											<td>{{auth()->user()->anggota->alamat}}</td>
										</tr>
										<tr>
											<td><b>Agama</b> </td>
											<td>{{auth()->user()->anggota->agama}}</td>
											<td>&nbsp</td>
											<td><b>Nomor HP</b> </td>
											<td>{{auth()->user()->anggota->hp}}</td>
										</tr>
										
										
			

			</tbody>
		</table>
	</div>
</div>
</div>

<div class="col-md-12">
					<div class="panel">

						<div class="panel-heading">
									<center><h3 class="panel-title">Data Akademik Alumni</h3></center>
								
									
								</div>
								

					<div class="panel-body">
					<table class="table table-hover">
						<tr>

										
										<td><b>NIM</b> </td>
										<td><b>Fakultas</b> </td>
										<td><b>Program Studi</b> </td>
										<td><b>Angkatan</b> </td>
										<td><b>Tahun Lulus</b> </td>
										<td><b>IPK</b> </td>
										<td><b>Nomor Ijazah</b> </td>
										</tr>
										
										@foreach (auth()->user()->anggota->data_akademik as $data_akademik)
										<tr>
										
										<td>{{$data_akademik->nim}} </td>
										<td>{{$data_akademik->fakultas}} </td>
										<td>{{$data_akademik->program_studi}} </td>
										<td>{{$data_akademik->angkatan}} </td>
										<td>{{$data_akademik->tahun_lulus}} </td>
										<td>{{$data_akademik->ipk}} </td>
										<td>{{$data_akademik->no_ijazah}} </td>
										</tr>
										@endforeach


									</table>
								</div>
							</div>
						</div>
</div>

				<div class="col-md-12">
					<div class="panel">

						<div class="panel-heading">
									<center><h3 class="panel-title">Data Tracer Studi</h3></center>
								
									
								</div>
								

					<div class="panel-body">
						<h4> <3 Bulan sebelum wisuda </h4>
					<table class="table table-hover">
						<tr>

										
										<td><b>Tempat kerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>Kisaran Gaji </b> </td>
										
										<td><b>Status Bekerja </b> </td>
										
										</tr>
										
										@foreach ($tracer as $tracer)
										<tr>
										
										<td>{{$tracer->tempat_kerja}} </td>
										<td>{{$tracer->jabatan}} </td>
										<td>{{$tracer->gaji}} </td>
										<td>{{$tracer->status}} </td>
										
									
										</tr>
										@endforeach


									</table>

						<h4> 1-3 Bulan setelah wisuda </h4>
					<table class="table table-hover">
						<tr>

										
										<td><b>Tempat kerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>Kisaran Gaji </b> </td>
										
										<td><b>Status Bekerja </b> </td>
										
										</tr>
										
										@foreach ($tracer1 as $tracer1)
										<tr>
										
										<td>{{$tracer1->tempat_kerja}} </td>
										<td>{{$tracer1->jabatan}} </td>
										<td>{{$tracer1->gaji}} </td>
										<td>{{$tracer1->status}} </td>
										
									
										</tr>
										@endforeach


									</table>


						<h4> 3-6 Bulan setelah wisuda </h4>
					<table class="table table-hover">
						<tr>

										
										<td><b>Tempat kerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>Kisaran Gaji </b> </td>
										
										<td><b>Status Bekerja </b> </td>
										
										</tr>
										
										@foreach ($tracer22 as $tracer22)
										<tr>
										
										<td>{{$tracer22->tempat_kerja}} </td>
										<td>{{$tracer22->jabatan}} </td>
										<td>{{$tracer22->gaji}} </td>
										<td>{{$tracer22->status}} </td>
										
									
										</tr>
										@endforeach


									</table>

					<h4> >6 Bulan setelah wisuda </h4>
					<table class="table table-hover">
						<tr>

										
										<td><b>Tempat kerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>Kisaran Gaji </b> </td>
										
										<td><b>Status Bekerja </b> </td>
										
										</tr>
										
										@foreach ($tracer33 as $tracer33)
										<tr>
										
										<td>{{$tracer33->tempat_kerja}} </td>
										<td>{{$tracer33->jabatan}} </td>
										<td>{{$tracer33->gaji}} </td>
										<td>{{$tracer33->status}} </td>
										
									
										</tr>
										@endforeach


									</table>
								</div>
							</div>
						</div>
</div>






				
			
		</div>

		<!-- Modal -->

			  </div>


@stop
