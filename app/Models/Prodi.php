<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table ='prodi';
   protected $fillable= ['id','program_studi'];
   protected $dates = ['created_at'];
}
