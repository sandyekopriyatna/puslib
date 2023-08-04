<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_pendidikan extends Model
{
   protected $table ='data_akademik';
   protected $fillable= ['nama_lengkap','fakultas','program_studi','angkatan','tahun_lulus','id_anggota','ipk','no_ijazah','nim'];

   public function anggota()
   {
   	return $this->belongsTo(Anggota::class,'id_anggota','id');
   }
}
