@extends('master.master')
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h4 class="font-weight-bold mb-0">data mata pelajaran</h4>
          </div>
          <div>
          <a href="{{route('tambah_matapelajaran')}}"><button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                <i class="ti-pencil btn-icon-prepend"></i>Tambah
              </button></a>   
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($data as $data)
      <div class="col-md-3 grid-margin stretch-card">         
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">{{$data->Nama_Mapel}}</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{($data->ID_MAPEL)}}</h3>
              <a href="{{route('edit_matapelajaran', [$data->ID_MAPEL])}}"><button type="button" class="btn btn-warning btn-rounded btn-icon mr-n5">
                <i class="ti-wand"></i>
              </button> </a>
                <button type="button" class="btn btn-danger btn-rounded btn-icon ml-n3">
                <i class="ti-trash"></i>
              </button>
            </div>  
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
        
@endsection