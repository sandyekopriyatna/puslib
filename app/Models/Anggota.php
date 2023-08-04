<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
   protected $table ='anggota';
   protected $fillable= ['nama_lengkap','nama_panggilan','lahir','jenis_kelamin','alamat','avatar','nim','agama','hp','user_id'];

   public function getAvatar()
   {
   	if (!$this->avatar)
   	{
   		return asset('images/default.jpg');
   	}
   		return asset('images/'.$this->avatar);
   }


   
   public function riwayat_pendidikan()
   {
   		return $this->hasMany(Riwayat_pendidikan::class,'id_anggota','id');
   }
   public function prestasi()
   {
         return $this->hasMany(prestasi::class,'id_anggota','id');
   }

   public function data_akademik()
   {
         return $this->hasMany(data_akademik::class,'id_anggota','id');
   }
   public function kerja()
   {
         return $this->hasMany(Kerja::class,'id_anggota','id');
   }
    public function user()
   {
         return $this->hasMany(User::class,'id','user_id');
   }
}
