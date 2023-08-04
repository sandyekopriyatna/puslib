
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

											@foreach($data_publikasi as $publikasi )
										<tr>

											
											<td><b>Program studi </b></td>
											<td>{{$publikasi->prodi}}</td>
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
											<td><b>Status</b></td>
											<td>{{$publikasi->status}}</td>
										</tr>
										<tr>
											
											
											
											<td><b>dokumen</b> </td>

											<td><a href="{{url('/images/repo',$publikasi->dokumen)}}"> {{$publikasi->dokumen}} </td>
										</tr>

									
									@endforeach
			

			</tbody>
		</table>
		<div class="col-md-6">
					
						
		<form action="/verifikasi/{{$publikasi->id}}/updatepencairan" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
		<div class="panel-body">
		<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tanggal Pencairan </label>
					    <input type="date" name="pencairan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$publikasi->tanggal_terbit}}">
					    </div>
					</div>
	<button type="submit" class="btn btn-warning ">Submit</button>
		</form>
	</div>
</div>
</div>



							


							
								</div>
						</div>
							





						


		

			  </div>



