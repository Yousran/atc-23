@extends('layouts.form')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/animate.min.css') }}">
@endsection
@section('contents')
    <div class="row bg-tertiary justify-content-center align-content-center h-100">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign Up</h5>
                    <form action="{{ route('signup.post') }}" method="post" id="signup-form">
                        @csrf
                        <div class="col">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="col">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Your@email.com">
                        </div>
                        <div class="col">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                        </div>
                        <div class="col">
                            <label class="form-label">Konfirm Password</label>
                            <input type="password" class="form-control" name="konfirm_password" placeholder="Konfirm Password">
                        </div>
                        <div class="col mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" id='submit-button'>Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        $(function() {
            $.validator.setDefaults({
                errorClass:'invalid-feedback animated fadeInUp',
                highlight: function(element){
                    $(element)
                    .closest('.form-control')
                    .addClass('is-invalid');
                },
                unhighlight: function(element){
                    $(element)
                    .closest('.form-control')
                    .removeClass('is-invalid').addClass('is-valid');
                },
            });
            $.validator.addMethod('strongPassword', function(value,element) {
                return this.optional(element)
                || value.length >= 6
                && /\d/.test(value)
                && /[a-z]/i.test(value);
            }, 'your password sucks');

           $("#signup-form").validate({
            // validClass: "is-valid",
            // errorClass: "is-invalid",
            rules: {
                username:{
                    required:true,
                    minlength: 3,
                    maxlength: 12,
                    remote: {
                        url: "{{ route('checkusername') }}",
                        type: "post",
                        data: {
                        _token: '{{ csrf_token() }}',
                        username: function() {
                            return $( "#username" ).val();
                            },
                        },
                    },
                },
                email:{
                    required:true,
                    email:true,
                },
                password:{
                    required:true,
                    strongPassword:true
                },
                konfirm_password:{
                    required:true,
                    equalTo:'#password',
                    strongPassword:true
                },
            },
           });
        });
    </script>
@endpush