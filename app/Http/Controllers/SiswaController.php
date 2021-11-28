<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        return view('dashboardsiswa');
    }

    public function add_siswa() {
        return view('tambahsiswa');
    }

    public function store(Request $request){
        $data  = new Siswa;



    }

    
}
