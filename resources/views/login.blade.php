@extends('layouts.form')
@section('contents')
    <div class="row bg-tertiary justify-content-center align-content-center h-100">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form action="{{ route('login.post') }}" method="post">
                        @csrf
                        <div class="col">
                            <label for="validationCustom01" class="form-label">Username/Email</label>
                            <input type="text" class="form-control" id="validationCustom01" name="username" value="Username" required>
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="col mt-3 d-flex justify-content-end">
                            <a href="{{ route('register') }}">Belum punya akun?</a>
                        </div>
                        <div class="col mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection