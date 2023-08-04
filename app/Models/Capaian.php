<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capaian extends Model
{
    protected $table ='capaian';
   protected $fillable= ['id','prodi','user_id','status','id_indikator','isian','bukti','hasil'];


   public function indikator()

    {
      return $this->belongsTo(Indikator::class,'id_indikator','id');
    }

    public function user()

    {
      return $this->belongsTo(User::class,'user_id','id');
    }

}
