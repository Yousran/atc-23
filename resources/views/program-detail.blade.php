@extends('layouts.with-sidebar')

@section('styles')
    @php
        $editcourse = false;
    @endphp
@foreach (Session::get('table_rules') as $rule)
    @if ($rule['add'] == 1 && $rule['table_list']['table_name'] == 'courses')    
    @php
        $editcourse = true;
    @endphp
    @endif
@endforeach
    <link rel="stylesheet" href="{{ asset('/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/ijaboCropTool.min.css') }}">
@endsection

@section('columns') 
    @if ($editcourse == true)   
        <!-- Modal -->
        <div class="modal fade" id="addprogram" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Program Kursus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <form action="{{ route('program.edit') }}" method="post" id="add-program-form">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="id" value="{{ $program->id }}">
                    <div class="col">
                        <label class="form-label">Nama Program Kursus</label>
                        <input type="text" class="form-control" id="" name="course_name" value="{{ $program->course_name }}">
                    </div>
                    <div class="col">
                        <label class="form-label">Harga Program Kursus</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" name="course_price" value="{{ $program->course_price }}">
                        </div>   
                    </div>
                    <div class="col">
                        <label class="form-label">Jumlah Pertemuan</label>
                        <input type="text" class="form-control" name="total_meet" value="{{ $program->total_meet }}">
                    </div>
                    <div class="col">
                        <label class="form-label">Jumlah Maksimum Peserta</label>
                        <input type="text" class="form-control" name="max_attendants" value="{{ $program->max_attendants }}">
                    </div>
                    <div class="col">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="desc">{{ $program->desc }}</textarea>
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
        <div class="d-flex justify-content-between">
            <h1 class="card-title">{{ $program->course_name }}</h1>
            @if ($editcourse == true)
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addprogram">
                    Edit
                </button>
            @endif
        </div>
    </x-col>
        
    <x-col ukuran='8'>
        @if ($editcourse == true)
            @if ($program->photo)
                <img src="{{ asset('/images/'.$program->photo) }}" class="img-fluid" alt="..." id="profil_pict">    
            @else
                <img src="{{ asset('/images/card-photo.png') }}" class="img-fluid" alt="..." id="profil_pict">
            @endif
        <div class="bg-body shadow-sm d-flex justify-content-center align-content-center align-middle" style="position: absolute; margin:1rem; bottom: 0; right:0; width: 3rem; height: 3rem; border-radius: 50%; cursor: pointer;" onclick="clickPhotoUpload()">
            <i class='bx bx-image-add fs-3' style="line-height: 150%"></i>
        </div>
        <form action="{{ route('program.programpictupload') }}" id="programpictupload" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $program->id }}">
            <input type="hidden" name="photo" id="photoname">
        </form>
        <input type="file" style="display: none" class="form-control" name="_userAvatarFile" id="_userAvatarFile">
        @else
            @if ($program->photo)
                <img src="{{ asset('/images/'.$program->photo) }}" class="img-fluid" alt="...">    
            @else
                <img src="{{ asset('/images/card-photo.png') }}" class="img-fluid" alt="...">
            @endif
        @endif
    </x-col>
    <x-col ukuran='4'>
        <div class="text">
            {{ $program->desc }}
        </div>
    </x-col>
@endsection
@push('script')
    @if ($editcourse == true)
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
            $('#_userAvatarFile').ijaboCropTool({
            preview:'#profil_pict',
            processUrl:"{{route('uploadimage')}}",
            withCSRF:['_token','{{ csrf_token() }}'],
            allowedExtensions: ['jpg', 'jpeg','png'],
            setRatio:16/9,
            onSuccess:function(message,element,status){
                $('#photoname').val(message);
                console.log("Foto Berhasil Terupload");
                $('#programpictupload').submit();
            },
            onError:function(message,element,status){
                console.log("Foto Gagal Terupload");
            }
            }); 
        </script>
        <script>
            function clickPhotoUpload() {
                console.log("Hello world!");
                document.querySelector('#_userAvatarFile').click();
            }
        </script>
    @endif
@endpush