<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ujian;

class UjianController extends Controller
{
    public function index()
    {
        $data = Ujian::all(); 
        return view('ujian.index_ujian', ['data' =>$data]);
    }   
}
