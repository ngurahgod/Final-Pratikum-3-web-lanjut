@extends('template_backend.home')
@section('sub-judul','Tambah Berita Banyuasri')
@section('content')
<form action="{{route('category.store')}}"method="POST">
@csrf
<div class="form-group">
                      <label>--KOLOM IMAJINASI--</label>
                      <input type="text" class="form-control" name="name">
                    </div>
<div class="form-group">
                    <button class="btn btn-primary btn-block">Simpan Imajinasi</button>
                    </div>

</form>
@endsection