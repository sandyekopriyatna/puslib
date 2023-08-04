<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{

	use HasFactory;

	
     protected $table ='penelitian';
   protected $fillable= ['id','nama'];

   public function harga()
    {
        return $this->hasMany(Publikasi::class,'id_penelitian','id');

    }
}

