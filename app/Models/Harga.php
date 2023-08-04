<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
      use HasFactory;


     protected $table ='harga';
   protected $fillable= ['id','kode','nama','kode','harga','tipe','id_penelitian'];

   public function publikasi()
    {
        return $this->hasMany(Publikasi::class,'id_harga','id');

    }

    public function penelitian()

    {
      return $this->belongsTo(Penelitian::class,'id_penelitian','id');
    }
}

