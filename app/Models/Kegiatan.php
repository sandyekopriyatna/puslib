<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Kegiatan extends Model
{
    use Sluggable;
    
    protected $fillable = ['title','content','thumbnail','slug2','user_id'];
	protected $dates = ['created_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug2' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()



    {
    	return $this->belongsTo(User::class);
    }
    public function thumbnail()

    {
    	return !$this->thumbnail ?  asset('no-thumbnail.jpg') : $this->thumbnail;
    }
    		
    public function getThumbnail()
   {
      if (!$this->thumbnail)
      {
         return asset('images/kegiatan/no-thumbnail.jpg');
      }
         return asset('images/kegiatan/'.$this->thumbnail);
   }
}
