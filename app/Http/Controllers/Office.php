<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Office extends Controller
{
    $data_office = \App\Models\Office::all();
    return view('office.index',compact(['data_anggota']));
}
