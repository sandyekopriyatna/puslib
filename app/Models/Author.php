<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Author extends Model
{
	use HasFactory, Notifiable;


 		protected $table ='author';
   protected $fillable= ['id','author'];


   
 public function repo()
    {
        return $this->hasMany(Repo::class,'id_author','id');
    }

  

   
}
