@extends('master.master')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Data Siswa</h4>
                </div>
                <div>
                    <a href="{{route('tambah_siswa')}}"><button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="ti-pencil btn-icon-prepend"></i>Tambah
                    </button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>NISN</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>    
                      @foreach($data as $data)
                          <td>{{$loop->iteration}}</td>
                          <td>{{$data->NIS}}</td>
                          <td>{{$data->Nama}}</td>
                          <td>{{$data->Alamat}}</td>
                          <td>  <a href="{{route('edit_siswa', [$data->id])}}"><button type="button" class="btn-sm btn-warning ti-pencil-alt btn-rounded"> edit</button></a>
                              <button type="button" class="btn-sm btn-danger ti-eraser btn-rounded"> edit</button>
                          </td>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection