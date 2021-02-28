@extends('lay.lay')
@section('title', 'Tambah Polling')
@section('header')

@section('content')

<div class="container">
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
    <a href="/home" class="btn btn-primary btn-sm mb-3">Kembali</a>
        <form action="/tambah_poll" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="exampleFotitlermControlInput1">Title</label>
                <input type="text" name="title" class="form-control" autocomplete="off" autofocus id="title" placeholder="Title">
            </div>
             <div class="form-group mb-2">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" autocomplete="off" id="description" placeholder="Description">
            </div>
             <div class="form-group mb-2">
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" class="form-control" autocomplete="off" id="deadline">
            </div>
            <label for="created_by">Created By</label>
                <select multiple class="form-control" name="created_by" id="created_by">
                @foreach($data as $created)
                <option name="created_by" value="{{ $created->id }}">{{ $created->username }}</option>
                @endforeach
                </select>
            <button type="submit" class="btn btn-primary btn-sm mt-3 ms-auto">Simpan</button>
        </form>
    </div>
</div>
</div>

@endsection
@section('footer')

