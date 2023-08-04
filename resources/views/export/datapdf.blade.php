<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>PURCHASE / EXPENSES REQUEST</h1>

<table id="customers">
 <tr>

                      
                      <td><b>Program studi </b></td>
                      <td>{{$publikasi->prodi}}</td>
                    
                      <td><b>jenis</b> </td>
                      <td>{{$publikasi ->harga->nama}}</td>

                    </tr>
                    <tr>
                      
                      <td><b>Kode </b></td>
                      <td>{{$publikasi->harga->kode}}</td>
                      
                      <td><b>harga</b> </td>
                      <td>{{$publikasi->harga->harga}}</td>
                    </tr>
                    <tr>
                      
                      <td><b>Tanggal Terbit </b></td>
                      <td>{{$publikasi->tanggal_terbit}}</td>
                     
                      <td><b>Edisi</b> </td>
                      <td>{{$publikasi->edisi}}</td>
                    </tr>
                    <tr>
                      <td><b>Tanggal diketahui Direktur</b></td>
                      <td>{{$publikasi->diketahui}}</td>
                    
                     
                        <td><b>Status dari Puslitabmas</b></td>
                      <td>{{$publikasi->status}}</td>
                    </tr>
                    
                    <tr>
                      
                      
                      
                      <td><b>Tanggal Pencairan dari WD II</b></td>
                      <td colspan="5">{{$publikasi->pencairan}}</td>
                      
                    </tr>
                    <tr>
                      
                    
                      <td><b>dokumen</b> </td>

                      <td colspan="5"><a href="{{url('/images/repo',$publikasi->dokumen)}}"> {{$publikasi->dokumen}} </td>
                      
                      
                    </tr>
                    <tr>
                      
                      
                        <td><b>Alamat Online </b></td>
                      <td colspan="5" >{{$publikasi->alamat_online}}</td>
                     
                      
                      
                    </tr>
                    <tr>
                      
                      
                      <td><b>Onedrive</b> </td>
                      <td colspan="4">{{$publikasi->onedrive}}</td>
                      
                      
                      
                    </tr>
                      <tr>
                      
                      
                      <td><b>Diajukan Oleh</b> </td>
                      <td colspan="4">{{$publikasi->user->name}}</td>
                      
                      
                      
                    </tr>


                     
                    
                    
 
</table>
<h1>Status</h1>

<table id="customers">
  <tr>
                        
                        <th>Time</th>
                        <th>User</th>                                 
                        <th>Jabatan</th> 
                        <th>Description</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                    
                      
                  <tr>

                    <td>{{$publikasi ->puslitabmas}}</a></td>

                    <td>Frangky Silitonga</td>
                     <td>Puslitabmas</td>
                    
                    <td>Dokumen has been approved</td>
                  </tr>
                  <tr>
                    <td>{{$publikasi ->wadir2}}</a></td>

                    <td>Syafruddin Rais</td>
                     <td>Wakil Direktur II</td>
                    
                    <td>Dokumen has been verified</td>
                  </tr>
                  <tr>
                    <td>{{$publikasi ->direktur}}</a></td>

                    <td>M Nur Nasution</td>
                     <td>Direktur</td>
                    
                    <td>Dokumen has been verified</td>
                  </tr>

</table>
</body>
</html>


