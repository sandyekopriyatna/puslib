<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $table ='prestasi';
   protected $fillable= ['nama','kompetisi','prestasi','tahun','posisi','id_anggota'];

  public function anggota()
   {
   	return $this->belongsTo(Anggota::class,'id_anggota','id');
   }
}
