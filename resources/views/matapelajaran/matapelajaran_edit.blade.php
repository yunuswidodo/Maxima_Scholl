@extends('master.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Masukan Matapelajaran</h4>
      <form class="forms-sample" method="POST" action="{{route('update_matapelajaran', [$data->ID_MAPEL])}}">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="nis">Matapelajaran</label>
          <input type="text" class="form-control" name="matapelajaran" id="matapelajaran" value="{{$data->Nama_Mapel}}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
@endsection