<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Repo extends Model
{


    protected $table ='repo';
   protected $fillable= ['id','date','year','id_author','id_type','id_prodi','title','description','file_repo','thumbnail'];



   public function thumbnail()

    {
    	return !$this->thumbnail ?  asset('no-thumbnail.jpg') : $this->thumbnail;
    }
    		
    public function getThumbnail()
   {
      if (!$this->thumbnail)
      {
         return asset('images/loker/no-thumbnail.jpg');
      }
         return asset('images/loker/'.$this->thumbnail);
   }

   
    



   public function author()

    {
      return $this->belongsTo(Author::class,'id_author','id');
    }



}
