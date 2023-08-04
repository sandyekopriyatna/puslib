@extends('layouts.master')

@section ('content')

  <meta name="_token" content="{{ csrf_token() }}">
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Tambah Data Publikasi</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Data Publikasi</h3>
								</div>

									<form action="/publikasi/create" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="panel-body">

								<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Judul Publikasi</label>
					    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="judul">
					    </div>

							<div class="form-group">
					    	<label for="exampleFormControlSelect1">Program Studi</label>
						<select name="prodi" class="form-control" aria-label="Default select example" >
							@foreach($data_prodi as $prodi)
						  <option value="{{$prodi->program_studi}}" >{{$prodi->program_studi}}</option>

						  @endforeach
						  
						  </select>
						</div>


					    
						<div class="form-group">
					    	<label for="exampleFormControlSelect1">Tipe Jurnal</label>
						 <select name="id_penelitian" class="form-control formselect required" placeholder="Select Sub Category" id="country">
							@foreach($data_penelitian as $penelitian)
						  <option value="{{$penelitian->id}}" >{{$penelitian->nama}}</option>
						  
						  	  @endforeach

						 
						  
						  </select>
						</div>
						<div class="form-group">
					    	<label for="exampleFormControlSelect1">Jenis Jurnal</label>
						<select name="id_harga" class="form-control formselect required" placeholder="Select Category"
                            id="state">
					
						  <option value="">pilih jurnal</option>

						
						  
						  </select>
						</div>
						




							<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tanggal terbit </label>
					    <input type="date" name="tanggal_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>
					    
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Edisi </label>
					    <input type="text" name="edisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Edisi">
					    </div>
						
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">dokumen</label>
							  <input type="file" name="dokumen" class="form-control">
							</div>

						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">alamat online</label>
					    <input type="text" name="alamat_online" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat online">
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">onedrive </label>
					    <input type="text" name="onedrive" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="onedrive">
					    </div>
					    

					    

					    
					    	
					   

						
					    <button type="submit" class="btn btn-warning ">Submit</button>

					 </form>

						
								</div>
				</div>
			</div>
			<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
        
   

						




		</div>
       }
	</div>
</div>


@stop


@push('after_scripts')

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script>
    $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
         }
   });

   $(document).ready(function(){
        $("#country").change(function(){
            var country_id = $(this).val();

            if (country_id == "") {
                var country_id = 0;
            } 

            $.ajax({
                url: '{{ url("/fetch-states/") }}/'+country_id,
                type: 'post',
                dataType: 'json',
                success: function(response) {                    
                    $('#state').find('option:not(:first)').remove();
                    $('#city').find('option:not(:first)').remove();

                    if (response['states'].length > 0) {
                        $.each(response['states'], function(key,value){
                            $("#state").append("<option value='"+value['id']+"'>"+value['nama']+"</option>")
                        });
                    } 
                }
            });            
        });


       

   });

   
 
</script>


<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    $(document).ready(function(){
    	$('#lfm').filemanager('file');
    	});
   

   


</script>
			

@endpush