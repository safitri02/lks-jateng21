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
<a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Added Vote</a>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="card-link mr-auto">Destroy</a>
  </div>
</div>
</div>

</div>


<!-- Modal -->
<form action="/tambah_poll" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
@endsection

@section('footer')
