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
                    <h5 class="card-title text-center">Daftar Sebagai Tutor</h5>
                    <form action="{{ route('tutor.adddata') }}" method="post" id="signup-form">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="col">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="surename" value="{{ $user->data->surename }}">
                        </div>
                        <div class="col">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" value="{{ $user->data->nik }}">
                        </div>
                        <div class="col">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="address" value="{{ $user->data->address }}">
                        </div>
                        <div class="col">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="birthday" value="{{ $user->data->birthday }}">
                        </div>
                        <div class="col">
                            <label class="form-label">Gender</label>
                            <select name="gender_id" class="form-select">
                                @foreach($genders as $gender)
                                    <option value="{{$gender->id}}" {{ $user->data && $user->data->gender && $user->data->gender->id == $gender->id ? 'selected' : '' }}>{{$gender->gender_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Pendidikan Terakhir</label>
                            <select name="education_id" class="form-select">
                                @foreach($educations as $education)
                                    <option value="{{ $education->id }}" {{ $user->data && $user->data->education && $user->data->education->id == $education->id ? 'selected' : '' }}>{{ $education->education_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Pekerjaan Terakhir</label>
                            <select name="job_id" class="form-select">
                                @foreach($jobs as $job)
                                    <option value="{{ $job->id }}" {{ $user->data && $user->data->job && $user->data->job->id == $job->id ? 'selected' : '' }}>{{ $job->job_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Agama</label>
                            <select name="religion_id" class="form-select">
                                @foreach($religions as $religion)
                                    <option value="{{ $religion->id }}" {{ $user->data && $user->data->religion && $user->data->religion->id == $religion->id ? 'selected' : '' }}>{{ $religion->religion_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Program Yang Akan Didaftar</label>
                            <select name="course_id" class="form-select">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" id='submit-button'>Selanjutnya</button>
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
                
            },
            messages:{
                
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