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
                                <a href="{{route('delete_siswa', [$data->id])}}"><button type="button" name="deletebuttonssss" class="btn-sm btn-danger ti-eraser btn-rounded"> delete</button></a>
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
       
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
        $( "#target" ).click(function() {
  alert( "Handler for .click() called." );
});
</script>
@endsection