<!DOCTYPE html>
<html lang="en" data-bs-theme='light'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">
    <link href="{{ asset('/icons/boxicons-2.1.4/css/boxicons.css') }}" rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/vendor/ijaboCropTool.min.css') }}">


</head>

<body>
    <x-sidebar/>

    <section class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div style="position: relative;">
                            <div style="width: 100%; height: 100%; border-radius: 50%; overflow: hidden;">
                                @if ($user->photo)
                                <img src="{{ asset('/images/'.$user->photo) }}" id="profil_pict" alt="Guest Photo" style="width: 100%; height: auto;">
                                @else
                                <img src="{{ asset('/images/guest-photo.png') }}" id="profil_pict" alt="Guest Photo" style="width: 100%; height: auto;">
                                @endif
                            </div>
                            @if ($session_username == $user->username)
                            <div class="bg-tertiary shadow-sm d-flex justify-content-center align-content-center align-middle" style="position: absolute; bottom: 0; right:0; width: 10%; height: 10%; border-radius: 50%; cursor: pointer;" onclick="clickPhotoUpload()">
                                <i class='bx bx-image-add fs-3' style="line-height: 150%"></i>
                            </div>
                            <form action="{{ route('profilpictupload') }}" id="form_profil_pict" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="photo" id="photoname">
                            </form>
                            <input type="file" style="display: none" class="form-control" name="_userAvatarFile" id="_userAvatarFile">
                            @endif
                        </div>
                        
                        
                        <h1 class="h-1 text-center" >{{ $user->username }}</h1>
                        <h3 class="text-center text-body-secondary" >{{ $user->role->role_name }}</h3>
                        <p class="text-center">{{ $user->data->bio ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form id="myForm" action="{{ route('updatedata') }}" method="post">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            @csrf
                            <label for="">Nama Lengkap</label>
                            <div class="text h5"><span>{{ $user->data->surename ?? 'Nama Lengkap' }}</span><input type="text" name='surename' class="form-control" style="display: none;"></div>
                            <label for="">NIK</label>
                            <div class="text h5"><span>{{ $user->data->nik ?? 'NIK' }}</span><input type="text" name='nik' class="form-control" style="display: none;"></div>
                            <label for="">Address</label>
                            <div class="text h5"><span>{{ $user->data->address ?? 'Address' }}</span><input type="text" name='address' class="form-control" style="display: none;"></div>
                            <label for="">Birthday</label>
                            <div class="text h5"><span>{{ $user->data->birthday ?? 'birthday' }}</span><input type="date" name='birthday' class="form-control" style="display: none;"></div>
                            <label for="">Gender</label>
                            <div class="text h5">
                                <span>{{ $user->data->gender->gender_name ?? 'gender' }}</span>
                                <select name="gender_id" class="form-select" style="display: none;">
                                    @foreach($genders as $gender)
                                        {{-- <option value="{{ $gender->id }}" {{ $user->data->gender->id == $gender->id ? 'selected' : '' }}>{{ $gender->gender_name }}</option> --}}
                                        <option value="{{$gender->id}}" {{ $user->data && $user->data->gender && $user->data->gender->id == $gender->id ? 'selected' : '' }}>{{$gender->gender_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="">Education</label>
                            <div class="text h5">
                                <span>{{ $user->data->education->education_name ?? 'education' }}</span>
                                <select name="education_id" class="form-select" style="display: none;">
                                    @foreach($educations as $education)
                                        {{-- <option value="{{ $education->id }}" {{ $user->data->education->id == $education->id ? 'selected' : '' }}>{{ $education->education_name }}</option> --}}
                                        <option value="{{ $education->id }}" {{ $user->data && $user->data->education && $user->data->education->id == $education->id ? 'selected' : '' }}>{{ $education->education_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="">Job</label>
                            <div class="text h5">
                                <span>{{ $user->data->job->job_name ?? 'job' }}</span>
                                <select name="job_id" class="form-select" style="display: none;">
                                    @foreach($jobs as $job)
                                        {{-- <option value="{{ $job->id }}" {{ $user->data->job->id == $job->id ? 'selected' : '' }}>{{ $job->job_name }}</option> --}}
                                        <option value="{{ $job->id }}" {{ $user->data && $user->data->job && $user->data->job->id == $job->id ? 'selected' : '' }}>{{ $job->job_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="">Religion</label>
                            <div class="text h5">
                                <span>{{ $user->data->religion->religion_name ?? 'religion' }}</span>
                                <select name="religion_id" class="form-select" style="display: none;">
                                    @foreach($religions as $religion)
                                        {{-- <option value="{{ $religion->id }}" {{ $user->data->religion->id == $religion->id ? 'selected' : '' }}>{{ $religion->religion_name }}</option> --}}
                                        <option value="{{ $religion->id }}" {{ $user->data && $user->data->religion && $user->data->religion->id == $religion->id ? 'selected' : '' }}>{{ $religion->religion_name }}</option>
                                    @endforeach
                                </select>
                            </div>                         
                            @if($session_username == $user->username)
                                <div class="d-flex justify-content-end">
                                    <button id="editButton" type="button" class="btn btn-primary">Edit</button>
                                    <button id="cancelButton" type="button" class="btn btn-danger mx-2" style="display: none;">Cancel</button>
                                    <button id="saveButton" type="submit" class="btn btn-primary" style="display: none;">Save</button>
                                </div>
                            @endif
                        </form>                                          
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>

    <script src="{{ asset('/js/sidebar.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        document.getElementById("editButton").addEventListener("click", function() {
        // Mengganti tombol Edit dengan tombol Save
        document.getElementById("editButton").style.display = "none";
        document.getElementById("saveButton").style.display = "block";
        document.getElementById("cancelButton").style.display = "block";

        // Menampilkan semua elemen input dan menyembunyikan teks
        var divs = document.querySelectorAll("#myForm .text.h5");
        for (var i = 0; i < divs.length; i++) {
            var input = divs[i].querySelector("input, select");
            var text = divs[i].querySelector("span");

            // Menyalin teks ke dalam input
            input.value = text.textContent;

            // Jika input adalah elemen select, perbarui opsi yang dipilih
            if (input.tagName === 'SELECT') {
                for (var j = 0; j < input.options.length; j++) {
                    if (input.options[j].text === text.textContent) {
                        input.options[j].selected = true;
                        break;
                    }
                }
            }

            // Menampilkan input dan menyembunyikan teks
            input.style.display = "block";
            text.style.display = "none";
        }
    });
    document.getElementById("cancelButton").addEventListener("click", function() {
        document.getElementById("editButton").style.display = "block";
        document.getElementById("saveButton").style.display = "none";
        document.getElementById("cancelButton").style.display = "none";
        var divs = document.querySelectorAll("#myForm .text.h5");
        for (var i = 0; i < divs.length; i++) {
            var input = divs[i].querySelector("input, select");
            var text = divs[i].querySelector("span");

            // Menampilkan input dan menyembunyikan teks
            input.style.display = "none";
            text.style.display = "block";
        }
    });
    </script>
    <script src="{{ asset('/vendor/ijaboCropTool.min.js') }}"></script>
    <script>
        $('#_userAvatarFile').ijaboCropTool({
        preview:'#profil_pict',
        processUrl:"{{route('uploadimage')}}",
        withCSRF:['_token','{{ csrf_token() }}'],
        allowedExtensions: ['jpg', 'jpeg','png'],
        onSuccess:function(message,element,status){
            $('#photoname').val(message);
            console.log("Foto Berhasil Terupload");
            $('#form_profil_pict').submit();
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
</body>

</html>
