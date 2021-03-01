@extends('lay.lay')
@section('title', 'Reset Password')
@section('header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
            <div class="card-title text-center"> <h3>Change Password</h3></div>
                <div class="card-body">
                    <form action="/change_password" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="old_password" class="form-label">Old Password</label>
                            <input type="password" name="old_password" autofocus autocomplete="off" class="form-control" id="old_password">
                            {{-- <div id="username" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="new_password" id="new_password">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
