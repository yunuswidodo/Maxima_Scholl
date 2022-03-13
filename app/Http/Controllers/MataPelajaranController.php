<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Matapelajaran;

class MataPelajaranController extends Controller
{
  public function index(){
    $data = Matapelajaran::all();
    return view('matapelajaran.matapelajaran_index',['data'=>$data]);
  }

  public function add_pelajaran(){
    return view('matapelajaran.matapelajaran_tambah');
  }

  public function store(Request $request){
   $data = new Matapelajaran;
   $data->Nama_Mapel = $request->matapelajaran;
   $data->save();
   return redirect()->route('index_matapelajaran');
  }

  public function edit_matapelajaran($id){
    $data = Matapelajaran::find($id);
    return view ('matapelajaran.matapelajaran_edit', ['data' => $data]);
  }


}
