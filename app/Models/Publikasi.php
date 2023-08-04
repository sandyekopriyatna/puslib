<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    protected $table ='publikasi';
   protected $fillable= ['id','judul','prodi','id_harga','tanggal_terbit','edisi','dokumen','alamat_online','onedrive','status','pencairan','diketahui','user_id','alasan','puslitabmas','wadir2','direktur' ,'url','url2','id_penelitian'];


   public function harga()

    {
      return $this->belongsTo(Harga::class,'id_harga','id');
    }

    public function user()

    {
      return $this->belongsTo(User::class,'user_id','id');
    }

}
