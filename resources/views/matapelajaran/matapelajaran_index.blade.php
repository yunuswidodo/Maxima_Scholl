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
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
                    <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
       
        
@endsection