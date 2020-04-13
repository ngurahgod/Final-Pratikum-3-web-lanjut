@extends('template_backend.home')
@section('sub-judul','Berita Banyuasri')
@section('content')

    <a href="{{ route('category.create')}}" class="btn btn-success btn-sm">Tambah Berita</a>
    <br><br>    

<h1> --menampilkan isi data base-- </h1>

    <table class="table table-striped table-hover table-sm ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Ngoprek ya bos</th  >
            </tr>
        </thead>
        <body>
            @foreach ($category as $result => $hasil)
            <tr>
                <td>{{$result + $category->firstitem()}}</td>
                <td>{{$hasil->name}}</td>
                <td><a herf="" class="btn btn-primary">Edit</a>
                    <a herf="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </body>
    </table>
    {{$category->links()}}

@endsection