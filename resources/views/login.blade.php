@extends('layouts.form')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/animate.min.css') }}">
@endsection
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
                            <input type="text" class="form-control @if (Session::has('wrong')) {{ 'is-invalid' }} @endif" id="validationCustom01" name="username" placeholder="Username/email" required>
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control @if (Session::has('wrong')) {{ 'is-invalid' }} @endif" id="exampleInputPassword1" name="password">
                            @if (Session::has('wrong'))
                            <div class="invalid-feedback animated fadeInUp" style="display: block;">{{
                                Session::get('wrong') }}</div>
                            @endif
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible mt-3" role="alert">
                                <div>Sign Up Sukses, Silahkan Login</div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @else
                            <div class="col mt-3 d-flex justify-content-end">
                                <a href="{{ route('signup') }}">Belum punya akun?</a>
                            </div>
                        @endif

                        <div class="col mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
    $(document).ready(function() {
        $('input').on('click', function() {
            $('input').removeClass('is-invalid');
            $('.invalid-feedback').hide();
        });
    });
    </script>
@endpush