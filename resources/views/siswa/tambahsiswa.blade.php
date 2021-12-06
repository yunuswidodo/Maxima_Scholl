@extends('master.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Masukan Siswa</h4>
      <form class="forms-sample" method="POST" action="store">
        @csrf
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan NIS Siswa">
        </div>
        <div class="form-group">
          <label for="nama">NAMA</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="masukan nama siswa">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="masukan alamat siswa">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
@endsection