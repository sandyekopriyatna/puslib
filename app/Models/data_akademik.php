<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_akademik extends Model
{
   protected $table ='data_akademik';
   protected $fillable= ['fakultas','program_studi','tahun_lulus','ipk','id_anggota','nim','no_ijazah','angkatan'];

  public function anggota()
   {
   	return $this->belongsTo(Anggota::class,'id_anggota','id');
   }
}
