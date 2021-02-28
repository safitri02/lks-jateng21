@extends('lay.lay')
@section('title', 'Halaman Home')
@section('header')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    {{-- <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="/logout">Keluar</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
<div class="row justify-content-center mt-5">
<div class="col-md-9">
<a href="/tambah_poll" class="mb-3 btn btn-primary">Tambah Polling</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Deadline</th>
            <th> Dibuat Oleh </th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($poll as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->description }}</td>
            <td>{{ $data->deadline }}</td>
            <td>{{ $data->user->username }}</td>
            <th>
                <a href="" class="btn btn-success btn-sm mb-2"> Vote </a>
                <a href="" class="btn btn-success btn-primary btn-sm mb-2"> Lihat Hasil </a>
                <a href="" class="btn btn-success btn-danger btn-sm mb-2"> Hapus </a>
            </th>
        </tr>
        @endforeach
    </table>
</div>
</div>

</div>
@endsection

@section('footer')
