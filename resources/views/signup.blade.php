@extends('layouts.form')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/ijaboCropTool.min.css') }}">
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
                        <input type="hidden" name="photoname" id="photoname">
                        <div class="col">
                            <label class="form-label">Foto Profil</label>
                            <input type="file" class="form-control" name="_userAvatarFile" id="_userAvatarFile">
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
    <script src="{{ asset('/vendor/ijaboCropTool.min.js') }}"></script>
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
            });

           $("#signup-form").validate({
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
                    remote: {
                        url: "{{ route('checkemail') }}",
                        type: "post",
                        data: {
                        _token: '{{ csrf_token() }}',
                        username: function() {
                            return $( "#email" ).val();
                            },
                        },
                    },
                },
                password:{
                    required:true,
                    minlength: 3,
                    strongPassword:true
                },
                konfirm_password:{
                    required:true,
                    equalTo:'#password',
                    strongPassword:true
                },
            },
            messages:{
                username:{
                    required : 'Mohon berikan username',
                    minlength: 'Minimal 3 kata',
                    maxlength: 'Maksimal 12 kata',
                    remote: 'Username telah digunakan',
                },
                email:{
                    required: 'Mohon berikan email',
                    email: 'Berikan format email yang benar',
                    remote: 'Email telah digunakan',
                },
                password:{
                    required: 'Mohon berikan password',
                    minlength: 'Password harus memiliki minimal 3 kata',
                    strongPassword: 'password harus berisi angka dan huruf',
                },
                konfirm_password:{
                    required: 'Mohon tulis ulang password',
                    minlength: 'Password harus memiliki minimal 3 kata',
                    equalTo: 'Password harus sesuai',
                    strongPassword: 'password harus berisi angka dan huruf',
                },
            },
           });
        });
    </script>
    <script>
        var successupload = "<div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>Foto telah terupload<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        var errorupload = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Format file salah<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        $('#_userAvatarFile').ijaboCropTool({
        processUrl:"{{route('uploadimage')}}",
        withCSRF:['_token','{{ csrf_token() }}'],
        allowedExtensions: ['jpg', 'jpeg','png'],
        onSuccess:function(message,element,status){
            $('#photoname').val(message);
            $('#_userAvatarFile').parent().after(successupload);
        },
        onError:function(message,element,status){
            $('#_userAvatarFile').parent().after(errorupload);
        }
        }); 
    </script>
@endpush