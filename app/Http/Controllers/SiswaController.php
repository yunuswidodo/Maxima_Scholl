<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $data = Siswa::all(); 
        return view('siswa.dashboardsiswa', ['data' =>$data]);
    }

    public function add_siswa() {
        return view('siswa.tambahsiswa');
        
    }

    public function store(Request $request){
        $data  = new Siswa;
        $data->NIS = $request->nis;
        $data->Nama = $request->nama;
        $data->Alamat = $request->alamat;
        $data->save();
        return redirect()->route('index_siswa');;
    }



    public function edit_siswa($id){
        $data = siswa::find($id);
        return view ('siswa.editsiswa', ['data' => $data]);
    }
}
