@extends('layouts.with-sidebar')

@section('styles')
    @php
        $addcourse = false;
    @endphp
@foreach (Session::get('table_rules') as $rule)
    @if ($rule['add'] == 1 && $rule['table_list']['table_name'] == 'courses')    
    @php
        $addcourse = true;
    @endphp
    @endif
@endforeach
    <link rel="stylesheet" href="{{ asset('/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/ijaboCropTool.min.css') }}">
@endsection

@section('columns') 
    @if ($addcourse == true)   
        <!-- Modal -->
        <div class="modal fade" id="addprogram" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Program Kursus Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <form action="{{ route('program.add') }}" method="post" id="add-program-form">
                <div class="modal-body">
                    @csrf
                    <div class="col">
                        <label class="form-label">Nama Program Kursus</label>
                        <input type="text" class="form-control" id="" name="course_name" placeholder="Program Kursus">
                    </div>
                    <div class="col">
                        <label class="form-label">Harga Program Kursus</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" name="course_price">
                        </div>   
                    </div>
                    <div class="col">
                        <label class="form-label">Jumlah Pertemuan</label>
                        <input type="text" class="form-control" name="total_meet">
                    </div>
                    <div class="col">
                        <label class="form-label">Jumlah Maksimum Peserta</label>
                        <input type="text" class="form-control" name="max_attendants">
                    </div>
                    <div class="col">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="desc"></textarea>
                    </div>
                    <input type="hidden" name="photoname" id="photoname">
                    <div class="col">
                        <label class="form-label">Foto</label>
                        <input type="file" class="form-control" name="_userAvatarFile" id="_userAvatarFile">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    @endif
    <x-col ukuran='12'>
        <h1 class="card-title">Program Kursus</h1>
    </x-col>
        @foreach ($programs as $program)
            <div class="col-sm-4 mb-3">
                <a href="{{ route('dashboard') }}">
                    <div class="card text-bg-dark">
                        @if ($program->photo)
                            <img src="{{ asset('/images/'.$program->photo) }}" class="card-img " alt="...">    
                        @else
                            <img src="{{ asset('/images/card-photo.png') }}" class="card-img" alt="...">
                        @endif
                        <div class="card-img-overlay bg-black opacity-50 ">
                        </div>
                        <div class="card-img-overlay">
                            <h2 class="card-title">{{ $program->course_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        @if ($addcourse == true)    
            <div class="col-sm-4 mb-3">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addprogram">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('/images/card-photo.png') }}" class="card-img opacity-0 " alt="...">
                        <div class="card-img-overlay">
                            <i class='bx bx-plus-circle w-100 fs-1 text-center'></i>
                        </div>
                    </div>
                </a>
            </div>
        @endif
@endsection
@push('script')
    @if ($addcourse == true)
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

            $("#add-program-form").validate({
                rules: {
                    course_name:{
                        required:true,
                    },
                    course_price:{
                        required:true,
                        digits:true,
                    },
                    total_meet:{
                        required:true,
                    },
                    max_attentants:{
                        required:true,
                    },
                },
                messages:{
                    course_name:{
                        required:'Mohon masukkan nama program',
                    },
                    course_price:{
                        required:'Mohon berikan harga',
                        digits:'Mohon masukkan angka',
                    },
                    total_meet:{
                        required:'Mohon berikan jumlah pertemuan',
                    },
                    max_attentants:{
                        required:'Mohon berikan jumlah peserta',
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
            setRatio:16/9,
            onSuccess:function(message,element,status){
                $('#photoname').val(message);
                $('#_userAvatarFile').parent().after(successupload);
            },
            onError:function(message,element,status){
                $('#_userAvatarFile').parent().after(errorupload);
            }
            }); 
        </script>
    @endif
@endpush