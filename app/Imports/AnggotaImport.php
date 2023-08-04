<?php

namespace App\Imports;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Http\Controllers\Anggota;

class AnggotaImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => 

        	$row) {
        	if($key>=3){
        	\App\Models\Anggota::create([
        		'nama_lengkap' => $row[1],
        		'nim' => $row[2],
        		'lahir' => $row[3],
        		 'email' => $row[4],
        		 'alamat' => $row[5],
        		 'agama' => $row[6],
        		 'hp' => $row[7],
        		 'tahun_lulus' => $row[8],
        		 'jenis_kelamin' =>$row[9]
        	]);

        	
        	\App\Models\User::create([
        		'name' => $row[1],
        		 'email' => $row[4],
        		 'alamat' => $row[5],
        		'role' => 'anggota',
        		'password' => bcrypt('123456'),
        		'remember_token' => Str::random(60)
        	]);

        	
        	  

        	}
       }
        
    }
}
