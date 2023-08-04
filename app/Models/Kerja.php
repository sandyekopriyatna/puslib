<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerja extends Model
{
   protected $table ='kerja';
   protected $fillable= ['tempat_kerja','jabatan','gaji','status','waktu','id_anggota'];

   public function anggota()
   {
   	return $this->belongsTo(Anggota::class,'id_anggota','id');
   }
   public function user()

    {
    	return $this->belongsTo(User::class);
    }
}
