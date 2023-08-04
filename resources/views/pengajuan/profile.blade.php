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
										<div class="text-center"><a href="/anggota/{{$anggota->id}}/edit" class="btn btn-primary">Edit Profile</a></div>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<tbody>
											<tr>
												<td rowspan="7" width="60px">
												<img class="picture-frame" width="150" src="{{$anggota->getAvatar()}}">
											</td>
											
											</tr>
										<tr>
											
											<td><b>Nama Lengkap </b></td>
											<td>{{$anggota->nama_lengkap}}</td>
											<td>&nbsp</td>
											<td><b>NIM</b> </td>
											<td>{{$anggota->nim}}</td>

										</tr>
										<tr>
											<td><b>Tempat/Tanggal Lahir</b> </td>
											<td>{{$anggota->lahir}}</td>
											<td>&nbsp</td>
											<td><b>Alamat</b> </td>
											<td>{{$anggota->alamat}}</td>
										</tr>
										<tr>
											<td><b>Agama</b> </td>
											<td>{{$anggota->agama}}</td>
											<td>&nbsp</td>
											<td><b>Nomor HP</b> </td>
											<td>{{$anggota->hp}}</td>
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
								
									<div class="right">
									<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary"> Tambah Data</i></button>
									</div>
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
										
										@foreach ($anggota->data_akademik as $data_akademik)
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

<div class="col-md-12">
					<div class="panel">

						<div class="panel-heading">
									<center><h3 class="panel-title"> Data Tracer Study</h3></center>
								
									
								</div>
								

					<div class="panel-body">
						<h4> <3 Bulan sebelum wisuda </h4>
					<table class="table table-hover">
						<tr>

										
										<td><b>Tempat Bekerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>gaji</b> </td>
										<td><b>Status Pekerjaan</b> </td>
										
										
										</tr>
										
										
										@foreach ($anggota->kerja as $kerja)
										@if($kerja->waktu == '<3')

										
										
										<tr>
										
										<td>{{$kerja->tempat_kerja}} </td>
										<td>{{$kerja->jabatan}} </td>
										
										<td>{{$kerja->gaji}} </td>
										
										<td>{{$kerja->status}} </td>
									
										</tr>
										@endif
										@endforeach


									</table>
							</div>

					<div class="panel-body">
						<h4> 1-3 Bulan setelah wisuda </h4>
					<table class="table table-hover">
						<tr>

										
										<td><b>Tempat Bekerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>gaji</b> </td>
										<td><b>Status Pekerjaan</b> </td>
										
										
										</tr>
										
										@foreach ($anggota->kerja as $kerja )
										@if($kerja->waktu == '1-3')
										
										<tr>
										
										<td>{{$kerja->tempat_kerja}} </td>
										<td>{{$kerja->jabatan}} </td>
										
										<td>{{$kerja->gaji}} </td>
										
										<td>{{$kerja->status}} </td>
									
										</tr>
										@endif
										@endforeach


									</table>
							</div>

						<div class="panel-body">
						<h4> 3-6 Bulan setelah wisuda </h4>
					<table class="table table-hover">
						<tr>

										
										<td><b>Tempat Bekerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>gaji</b> </td>
										<td><b>Status Pekerjaan</b> </td>
										
										
										</tr>
										
										@foreach ($anggota->kerja as $kerja )
										@if($kerja->waktu == '3-6')
										
										<tr>
										
										<td>{{$kerja->tempat_kerja}} </td>
										<td>{{$kerja->jabatan}} </td>
										
										<td>{{$kerja->gaji}} </td>
										
										<td>{{$kerja->status}} </td>
									
										</tr>
										@endif
										@endforeach


									</table>
							</div>

								<div class="panel-body">
						<h4> >6 Bulan setelah wisuda </h4>
					<table class="table table-hover">
						<tr>

										
										<td><b>Tempat Bekerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>gaji</b> </td>
										<td><b>Status Pekerjaan</b> </td>
										
										
										</tr>
										
										@foreach ($anggota->kerja as $kerja )
										@if($kerja->waktu == '>6')
										
										<tr>
										
										<td>{{$kerja->tempat_kerja}} </td>
										<td>{{$kerja->jabatan}} </td>
										
										<td>{{$kerja->gaji}} </td>
										
										<td>{{$kerja->status}} </td>
									
										</tr>
										@endif
										@endforeach


									</table>
							</div>

							


							
								</div>
						</div>
							





						<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Akademik Alumni</h5>
			        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
						<form action="/anggota/{{$anggota->id}}/tambahriwayat" method="POST">
							{{csrf_field()}}

					  

					     <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nim</label>
					    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Fakultas</label>
					    <input type="text" name="fakultas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Program Studi</label>
					    <input type="number" name="program_studi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Angkatan</label>
					    <input type="text" name="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">tahun lulus</label>
					    <input type="text" name="tahun_lulus" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					   	 <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">ipk</label>
					    <input type="text" name="ipk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					     <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nomor Ijazah</label>
					    <input type="text" name="no_ijazah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>


					 
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			         <button type="submit" class="btn btn-primary">Submit</button>
					</form>
			      </div>
			    </div>
			  </div>
			</div>
			</div>
		</div>

		<!-- Modal -->


		

			  </div>


@stop
