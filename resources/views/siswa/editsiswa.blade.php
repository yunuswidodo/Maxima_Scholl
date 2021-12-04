@extends('master.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Keterangan siswa</h4>
      <form class="forms-sample" method="POST" action="store">
        @csrf
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" class="form-control" name="nis" id="nis" value="{{$data->NIS}}">
        </div>
        <div class="form-group">
          <label for="nama">NAMA</label>
          <input type="text" class="form-control" name="nama" id="nama" value="{{$data->Nama}}">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" value="{{$data->Alamat}}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
@endsection