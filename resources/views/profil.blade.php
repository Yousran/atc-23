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


</head>

<body>
    <x-sidebar/>

    <section class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div style="width: 100%; height: 100%; border-radius: 50%; overflow: hidden;">
                            <img src="{{ asset('/images/guest-photo.png') }}" alt="Guest Photo" style="width: 100%; height: auto;">
                        </div>
                        <h1 class="h-1 text-center" >Username</h1>
                        <h3 class="text-center text-body-secondary" >Guest</h3>
                        <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est impedit tenetur exercitationem quisquam cum hic nisi modi eos harum quibusdam alias, deserunt voluptatibus quasi eveniet architecto repudiandae? Aliquam, dolor dicta.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form id="myForm" action="" method="post">
                            <label for="">Nama Lengkap</label>
                            <div class="text h5"><span>asjkfjasjls</span><input type="text" class="form-control" style="display: none;"></div>
                            <label for="">NIK</label>
                            <div class="text h5"><span>asjkfjasjls</span><input type="text" class="form-control" style="display: none;"></div>
                            <label for="">Address</label>
                            <div class="text h5"><span>asjkfjasjls</span><input type="text" class="form-control" style="display: none;"></div>
                            <label for="">birthday</label>
                            <div class="text h5"><span>asjkfjasjls</span><input type="date" class="form-control" style="display: none;"></div>
                            <label for="">gender</label>
                            <div class="text h5"><span>asjkfjasjls</span>
                                <select class="form-control" style="display: none;">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <label for="">education</label>
                            <div class="text h5"><span>asjkfjasjls</span><input type="text" class="form-control" style="display: none;"></div>
                            <label for="">job</label>
                            <div class="text h5"><span>asjkfjasjls</span><input type="text" class="form-control" style="display: none;"></div>
                            <label for="">religion</label>
                            <div class="text h5"><span>asjkfjasjls</span>
                                <select class="form-control" style="display: none;">
                                    <option>Islam</option>
                                    <option>Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button id="editButton" type="button" class="btn btn-primary">Edit</button>
                                <button id="saveButton" type="submit" class="btn btn-primary" style="display: none;">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <script>
                    document.getElementById("editButton").addEventListener("click", function() {
                        // Mengganti tombol Edit dengan tombol Save
                        document.getElementById("editButton").style.display = "none";
                        document.getElementById("saveButton").style.display = "block";
                    
                        // Menampilkan semua elemen input dan menyembunyikan teks
                        var divs = document.querySelectorAll("#myForm .text.h5");
                        for (var i = 0; i < divs.length; i++) {
                            var input = divs[i].querySelector("input, select");
                            var text = divs[i].querySelector("span");
                    
                            // Menyalin teks ke dalam input
                            input.value = text.textContent;
                    
                            // Menampilkan input dan menyembunyikan teks
                            input.style.display = "block";
                            text.style.display = "none";
                        }
                    });
                </script>
                
                
                
                
            </div>
        </div>
    </section>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>

    <script src="{{ asset('/js/sidebar.js') }}"></script>
</body>

</html>
