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
}
