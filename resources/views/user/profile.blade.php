@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">

			<h3 class="panel-title"><center>Data Anggota Pemain</h3></center>
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

										<td><b>Nama Alumni</b> </td>
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
										<td>{{$data_akademik->nama_lengkap}} </td>
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







						<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Akademik Alumni</h5>
			        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
						<form action="/anggota/{{$anggota->id}}/tambahssb" method="POST">
							{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">NAMA SSB</label>
					    <input type="text" name="nama_ssb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
					    </div>

					     <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">KABUPATEN</label>
					    <input type="text" name="kabupaten" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">PROVINSI</label>
					    <input type="text" name="provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">TAHUN</label>
					    <input type="number" name="tahun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">POSISI</label>
					    <input type="text" name="posisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
			<div class="modal fade" id="datamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Prestasi Sepak Bola</h5>
			        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
						<form action="/anggota/{{$anggota->id}}/tambahprestasi" method="POST">
							{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">NAMA SSB</label>
					    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
					    </div>

					     <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">KOMPETISI</label>
					    <input type="text" name="kompetisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">PRESTASI</label>
					    <input type="text" name="prestasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">TAHUN</label>
					    <input type="number" name="tahun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">POSISI</label>
					    <input type="text" name="posisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
					    </div>


					 
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			         <button type="submit" class="btn btn-primary">Submit</button>
					</form>
			      </div>
			    </div>
			  </div>


@stop
