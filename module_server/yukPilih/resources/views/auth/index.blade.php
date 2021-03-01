@extends('lay.lay')
@section('title', 'Silahkan Login')
@section('header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
            <div class="card-title text-center"> <h3>Silahkan Masuk</h3></div>
                <div class="card-body">
                    <form action="/proses_login" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" autofocus autocomplete="off" class="form-control" id="username">
                            {{-- <div id="username" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Masuk</button>
                        <a href="/change_password">Change Password</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
