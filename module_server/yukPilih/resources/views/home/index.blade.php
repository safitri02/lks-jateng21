@extends('lay.lay')
@section('title', 'Halaman Home')
@section('header')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
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

@foreach ($pool  as $object)

<div class="card mt-3">
<div class="card-header">
    <div class="float-left">
    <h4 class="card-title">{{ $object->title }}</h4>
    <p class="card-desc">created by: {{ $object->user->username }} | deadline: {{ $object->deadline }}</p>
    </div>
    <div class="float-right">
        <a href="">Delete</a>
    </div>
</div>
<div class="card-body">
    <p>{{ $object->description }}</p>

    <div class="votes">
        <button class="btn btn-primary btn-block"> gvjgj </button>
    </div>
    <div class="results">
        <div class="result mt-2">
            Hasil pilihan :
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>
</div>

@endforeach

</div>
</div>

</div>


<!-- Modal -->
<form action="/tambah_poll" method="post">
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Poling</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       <div class="input-group flex-nowrap">
          <input type="text" class="form-control mb-3" name="title" placeholder="Title" aria-label="title" aria-describedby="addon-wrapping">
        </div>
         <div class="input-group flex-nowrap">
          <input type="text" class="form-control mb-3" name="description" placeholder="Description" aria-label="Description" aria-describedby="addon-wrapping">
        </div>
         <div class="input-group flex-nowrap">
          <input type="date" class="form-control mb-3" name="deadline" placeholder="Deadline" aria-label="Deadline" aria-describedby="addon-wrapping">
        </div>
        <div class="form-group">
            <label for="">Choice</label>
            <input type="text" name="choice[]" id="" class="form-control mt-2">
            <a href="#" class="addChoice btn btn-primary btn-sm mt-3">Tambah Pilihan</a>
        </div>

      <div class="choices"></div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div></div>
</form>


<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript">

$('.addChoice').on('click', function() {
  addChoice();
});

function addChoice(){
  var choices = '<div><div class="form-group"><label for="">Choice</label><input type="text" name="choice[]" id="" class="form-control mt-2"><a href="#" class="remove btn btn-danger btn-sm mt-3">Hapus</a></div></div>';
  $('.choices').append(choices);
};

$('.remove').live('click', function(){
  $(this).parent().parent().parent().remove();
})

</script>

@endsection

@section('footer')
