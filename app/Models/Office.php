<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table ='office';
   protected $fillable= ['id','tanggal','customer_reference','customer_name','project_name','quotation_no','po_no','job_no','drawing_no','qty','value','target_delivery','invoice'];
}

