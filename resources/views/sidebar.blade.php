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
    <div class="sidebar close">
        <header>
        <div class="logo-details">
            <i><img src="{{ asset('/icons/logo-alkahfi.svg') }}" alt="logo-alkahfi" ></i>
            <span class="logo_name">Al-Kahfi TC</span>
        </div>
    
        <i class='bx bx-chevron-right toggle'></i>
        </header>
        <ul class="nav-links">
            <li class="menu-head">
                <a href="">
                    <i class='bx bx-home'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="">Dashboard</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <a href="#">
                    <i class='bx bx-collection'></i>
                    <span class="link_name">Program Kursus</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Program Kursus</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-edit'></i>
                        <span class="link_name">Daftar</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Daftar</a></li>
                    <li><a href="#"><i class='bx bx-group'></i>Peserta</a></li>
                    <li><a href="#"><i class='bx bx-chalkboard'></i>Instruktur</a></li>
                </ul>
            </li>
      
            <li class="menu-head">
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-slider-alt'></i>
                        <span class="link_name">Superuser</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Superuser</a></li>
                    <li><a href=""><i class='bx bx-key'></i>Role Permission</a></li>
                    <li><a href="#"><i class='bx bx-terminal'></i>Config</a></li>
                    <li><a href="#"><i class='bx bx-history'></i>Logs</a></li>
                </ul>
            </li>
            
            <li class="menu-head">
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-chalkboard'></i>
                    <span class="link_name">Instruktur</span>
                </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Instruktur</a></li>
                    <li><a href="#"><i class='bx bxs-school'></i>Daftar Kelas</a></li>
                    <li><a href="#"><i class='bx bx-calendar-event'></i>Jadwal</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-group'></i>
                    <span class="link_name">Peserta</span>
                </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Peserta</a></li>
                    <li><a href="#"><i class='bx bxs-school'></i>Kelas</a></li>
                    <li><a href="#"><i class='bx bx-calendar-event'></i>Jadwal</a></li>
                    <li><a href="#"><i class='bx bx-medal'></i>Sertifikat</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-support'></i>
                    <span class="link_name">Operator</span>
                </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Operator</a></li>
                    <li><a href="#"><i class='bx bx-user-check'></i>Konfirm Pendaftar</a></li>
                    <li><a href="#"><i class='bx bx-calendar-event'></i>Jadwal</a></li>
                    <li><a href="#"><i class='bx bx-medal'></i>Sertifikat</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-money'></i>
                    <span class="link_name">Bendahara</span>
                </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Bendahara</a></li>
                    <li><a href="#"><i class='bx bx-wallet'></i>Kas</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-notepad'></i>
                    <span class="link_name">Sekretaris</span>
                </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Sekretaris</a></li>
                    <li><a href="#"><i class='bx bx-printer'></i>Cetak Sertifikat</a></li>
                    <li><a href="#"><i class='bx bx-envelope'></i>Penomoran Surat</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-table'></i>
                    <span class="link_name">Tabel</span>
                </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Tabel</a></li>
                    <li><a href="#"><i class='bx bx-table'></i>Konfirm Pendaftar</a></li>
                    <li><a href="#"><i class='bx bx-table'></i>Konfirm Pendaftar</a></li>
                    <li><a href="#"><i class='bx bx-table'></i>Konfirm Pendaftar</a></li>
                    <li><a href="#"><i class='bx bx-table'></i>Konfirm Pendaftar</a></li>
                    <li><a href="#"><i class='bx bx-table'></i>Konfirm Pendaftar</a></li>
                    <li><a href="#"><i class='bx bx-table'></i>Konfirm Pendaftar</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Chart</span>
                </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Tabel</a></li>
                    <li><a href="#"><i class='bx bx-pie-chart-alt-2'></i>Konfirm Pendaftar</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <a href="#">
                    <i class='bx bx-play'></i>
                    <span class="link_name">Tutorial</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Tutorial</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li>
    
            <li class="menu-head">
                <div class="profile-details">
                    <a href="">
                        <div class="profile-content">
                            <img src="{{ asset('/images/guest-photo.png') }}" alt="profileImg">
                        </div>
                        <div class="name-job">
                            <div class="profile_name">Guest</div>
                            <div class="job">guest</div>
                        </div>
                    </a>
                    <a href="">
                        <i class='bx bx-log-out logout'></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Rules</h5>

                        <div class="modal fade" id="tambah_role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Role</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Role Name</label>
                                            <input type="text" class="form-control"  placeholder="Peserta">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea type="text" class="form-control"  placeholder="Description"></textarea>
                                        </div>
                                        {{-- Upload FOto Role --}}
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="hapus_role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Role</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <h3>Apakah Anda Yakin Ingin Menghapus?</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="btn-group">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_role">Hapus Role</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah_role">Add New Role</button>
                            </div>
                        </div>
                        <form action="" method="post"></form>
                            <ul class="nav nav-tabs pt-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#panel1">satu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#panel2">dua</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#panel3">tiga</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="panel1" role="tabpanel">
                                    <div class="table-responsive-sm">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Table</th>
                                                <th colspan="8" scope="col">Role Permission</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td style="text-align: center">ALL</td>
                                                <td style="text-align: center">VIEW</td>
                                                <td style="text-align: center">ADD</td>
                                                <td style="text-align: center">EDIT</td>
                                                <td style="text-align: center">EXPORT</td>
                                                <td style="text-align: center">SOFT DELETE</td>
                                                <td style="text-align: center">HARD DELETE</td>
                                            </tr>
                                            <tr>
                                                <td>User</td>
                                                <td style="text-align: center"><input class="form-check-input all" type="checkbox" onclick="toggleAll(this)"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)" checked='true'></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)" checked='true'></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)" checked='true'></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)" checked='true'></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)" checked='true'></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)" checked='true'></td>
                                            </tr>
                                            <tr>
                                                <td>User</td>
                                                <td style="text-align: center"><input class="form-check-input all" type="checkbox" onclick="toggleAll(this)"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox" onclick="checkAll(this)"></td>
                                            </tr>
                                            <tr>
                                                <td>User</td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox"></td>
                                                <td style="text-align: center"><input class="form-check-input" type="checkbox"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="panel2" role="tabpanel">

                                </div>
                                <div class="tab-pane fade" id="panel3" role="tabpanel">

                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sidebar Rules</h5>
                        <ul class="nav nav-tabs pt-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#elemetrule1">satu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#elemetrule2">dua</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#elemetrule3">tiga</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="elemetrule1" role="tabpanel">
                                <h3>Satu</h3>
                                <div style="display: flex; align-items: center;">
                                    <i id="dashboard" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Dashboard</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="program_kursus" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Program Kursus</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Daftar</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Pendaftaran Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Pendaftaran Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="superuser" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Superuser</div>
                                </div> 
                                <div style="display: flex; align-items: center;">
                                    <i id="role_permission" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Role Permission</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="config" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Config</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="logs" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">logs</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_kelas_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Daftar Kelas Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="kelas_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Kelas Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sertifikat_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sertifikat Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="operator" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Operator</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="konfirm_pendaftar" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Konfirmasi Pendaftar</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sertifikat_operator" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sertifikat Operator</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="bendahara" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Bendahara</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="kas" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Kas</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sekretaris" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sekretaris</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="cetak_sertifikat" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Cetak Sertifikat</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="penomoran_surat" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Penomoran Surat</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="tabel" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Tabel</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="chart" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Chart</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="tutorial" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Tutorial</div>
                                </div>                        
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="1">
                                    <input type="checkbox" name="dashboard" style="display: none">
                                    <input type="checkbox" name="program_kursus" style="display: none">
                                    <input type="checkbox" name="daftar" style="display: none">
                                    <input type="checkbox" name="daftar_peserta" style="display: none">
                                    <input type="checkbox" name="daftar_instruktur" style="display: none">
                                    <input type="checkbox" name="superuser" style="display: none">
                                    <input type="checkbox" name="role_permission" style="display: none">
                                    <input type="checkbox" name="config" style="display: none">
                                    <input type="checkbox" name="logs" style="display: none">
                                    <input type="checkbox" name="instruktur" style="display: none">
                                    <input type="checkbox" name="daftar_kelas_instruktur" style="display: none">
                                    <input type="checkbox" name="jadwal_instruktur" style="display: none">
                                    <input type="checkbox" name="peserta" style="display: none">
                                    <input type="checkbox" name="kelas_peserta" style="display: none">
                                    <input type="checkbox" name="jadwal_peserta" style="display: none">
                                    <input type="checkbox" name="sertifikat_peserta" style="display: none">
                                    <input type="checkbox" name="operator" style="display: none">
                                    <input type="checkbox" name="konfirm_pendaftar" style="display: none">
                                    <input type="checkbox" name="jadwal" style="display: none">
                                    <input type="checkbox" name="sertifikat_operator" style="display: none">
                                    <input type="checkbox" name="bendahara" style="display: none">
                                    <input type="checkbox" name="kas" style="display: none">
                                    <input type="checkbox" name="sekretaris" style="display: none">
                                    <input type="checkbox" name="cetak_sertifikat" style="display: none">
                                    <input type="checkbox" name="penomoran_surat" style="display: none">
                                    <input type="checkbox" name="tabel" style="display: none">
                                    <input type="checkbox" name="chart" style="display: none">
                                    <input type="checkbox" name="tutorial" style="display: none">
                                    <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="elemetrule2" role="tabpanel">
                                <h3>Dua</h3>
                                <div style="display: flex; align-items: center;">
                                    <i id="dashboard" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Dashboard</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="program_kursus" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Program Kursus</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Daftar</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Pendaftaran Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Pendaftaran Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="superuser" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Superuser</div>
                                </div> 
                                <div style="display: flex; align-items: center;">
                                    <i id="role_permission" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Role Permission</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="config" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Config</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="logs" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">logs</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_kelas_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Daftar Kelas Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="kelas_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Kelas Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sertifikat_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sertifikat Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="operator" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Operator</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="konfirm_pendaftar" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Konfirmasi Pendaftar</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sertifikat_operator" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sertifikat Operator</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="bendahara" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Bendahara</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="kas" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Kas</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sekretaris" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sekretaris</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="cetak_sertifikat" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Cetak Sertifikat</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="penomoran_surat" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Penomoran Surat</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="tabel" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Tabel</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="chart" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Chart</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="tutorial" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Tutorial</div>
                                </div>                        
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="2">
                                    <input type="checkbox" name="dashboard" style="display: none">
                                    <input type="checkbox" name="program_kursus" style="display: none">
                                    <input type="checkbox" name="daftar" style="display: none">
                                    <input type="checkbox" name="daftar_peserta" style="display: none">
                                    <input type="checkbox" name="daftar_instruktur" style="display: none">
                                    <input type="checkbox" name="superuser" style="display: none">
                                    <input type="checkbox" name="role_permission" style="display: none">
                                    <input type="checkbox" name="config" style="display: none">
                                    <input type="checkbox" name="logs" style="display: none">
                                    <input type="checkbox" name="instruktur" style="display: none">
                                    <input type="checkbox" name="daftar_kelas_instruktur" style="display: none">
                                    <input type="checkbox" name="jadwal_instruktur" style="display: none">
                                    <input type="checkbox" name="peserta" style="display: none">
                                    <input type="checkbox" name="kelas_peserta" style="display: none">
                                    <input type="checkbox" name="jadwal_peserta" style="display: none">
                                    <input type="checkbox" name="sertifikat_peserta" style="display: none">
                                    <input type="checkbox" name="operator" style="display: none">
                                    <input type="checkbox" name="konfirm_pendaftar" style="display: none">
                                    <input type="checkbox" name="jadwal" style="display: none">
                                    <input type="checkbox" name="sertifikat_operator" style="display: none">
                                    <input type="checkbox" name="bendahara" style="display: none">
                                    <input type="checkbox" name="kas" style="display: none">
                                    <input type="checkbox" name="sekretaris" style="display: none">
                                    <input type="checkbox" name="cetak_sertifikat" style="display: none">
                                    <input type="checkbox" name="penomoran_surat" style="display: none">
                                    <input type="checkbox" name="tabel" style="display: none">
                                    <input type="checkbox" name="chart" style="display: none">
                                    <input type="checkbox" name="tutorial" style="display: none">
                                    <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="elemetrule3" role="tabpanel">
                                <h3>Tiga</h3>
                                <div style="display: flex; align-items: center;">
                                    <i id="dashboard" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Dashboard</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="program_kursus" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Program Kursus</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Daftar</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Pendaftaran Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Pendaftaran Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="superuser" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Superuser</div>
                                </div> 
                                <div style="display: flex; align-items: center;">
                                    <i id="role_permission" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Role Permission</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="config" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Config</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="logs" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">logs</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_kelas_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Daftar Kelas Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal_instruktur" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="kelas_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Kelas Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sertifikat_peserta" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sertifikat Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="operator" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Operator</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="konfirm_pendaftar" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Konfirmasi Pendaftar</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sertifikat_operator" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sertifikat Operator</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="bendahara" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Bendahara</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="kas" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Kas</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sekretaris" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sekretaris</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="cetak_sertifikat" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Cetak Sertifikat</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="penomoran_surat" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Penomoran Surat</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="tabel" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Tabel</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="chart" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Chart</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="tutorial" style="font-size: 2rem" class='bx bx-show' onclick="toggleIcon(this)"></i>
                                    <div class="text">Tutorial</div>
                                </div>                        
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="3">
                                    <input type="checkbox" name="dashboard" style="display: none">
                                    <input type="checkbox" name="program_kursus" style="display: none">
                                    <input type="checkbox" name="daftar" style="display: none">
                                    <input type="checkbox" name="daftar_peserta" style="display: none">
                                    <input type="checkbox" name="daftar_instruktur" style="display: none">
                                    <input type="checkbox" name="superuser" style="display: none">
                                    <input type="checkbox" name="role_permission" style="display: none">
                                    <input type="checkbox" name="config" style="display: none">
                                    <input type="checkbox" name="logs" style="display: none">
                                    <input type="checkbox" name="instruktur" style="display: none">
                                    <input type="checkbox" name="daftar_kelas_instruktur" style="display: none">
                                    <input type="checkbox" name="jadwal_instruktur" style="display: none">
                                    <input type="checkbox" name="peserta" style="display: none">
                                    <input type="checkbox" name="kelas_peserta" style="display: none">
                                    <input type="checkbox" name="jadwal_peserta" style="display: none">
                                    <input type="checkbox" name="sertifikat_peserta" style="display: none">
                                    <input type="checkbox" name="operator" style="display: none">
                                    <input type="checkbox" name="konfirm_pendaftar" style="display: none">
                                    <input type="checkbox" name="jadwal" style="display: none">
                                    <input type="checkbox" name="sertifikat_operator" style="display: none">
                                    <input type="checkbox" name="bendahara" style="display: none">
                                    <input type="checkbox" name="kas" style="display: none">
                                    <input type="checkbox" name="sekretaris" style="display: none">
                                    <input type="checkbox" name="cetak_sertifikat" style="display: none">
                                    <input type="checkbox" name="penomoran_surat" style="display: none">
                                    <input type="checkbox" name="tabel" style="display: none">
                                    <input type="checkbox" name="chart" style="display: none">
                                    <input type="checkbox" name="tutorial" style="display: none">
                                    <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Button</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        <a href="#" class="btn btn-secondary">Go somewhere</a>
                        <a href="#" class="btn btn-danger">Go somewhere</a>
                        <a href="#" class="btn btn-info">Go somewhere</a>
                        <a href="#" class="btn btn-success">Go somewhere</a>
                        <a href="#" class="btn btn-warning">Go somewhere</a>
                        <a href="#" class="btn btn-light">Go somewhere</a>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('/js/bootstrap.js') }}"></script>

    <script src="{{ asset('/js/sidebar.js') }}"></script>
    <script>
    window.onload = function() {
        var allCheckboxes = document.querySelectorAll('.all');
        for (var i = 0; i < allCheckboxes.length; i++) {
            checkAll(allCheckboxes[i]);
        }
    }

    function toggleAll(element) {
        var checkboxes = element.parentElement.parentElement.querySelectorAll('input[type=checkbox]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = element.checked;
        }
    }

    function checkAll(element) {
        var checkboxes = element.parentElement.parentElement.querySelectorAll('input[type=checkbox]');
        var allCheckbox = element.parentElement.parentElement.querySelector('input.all');
        var allChecked = true;
        for (var i = 1; i < checkboxes.length; i++) { // Start from 1 to skip the 'all' checkbox
            if (!checkboxes[i].checked) {
                allChecked = false;
                break;
            }
        }
        allCheckbox.checked = allChecked;
    }

        </script>
    <script>
        function toggleIcon(element) {
            var checkbox = document.getElementsByName(element.id)[0];
            var icon = element;
    
            // Toggle the checkbox
            checkbox.checked = !checkbox.checked;
    
            // Change the icon class based on the checkbox state
            if (checkbox.checked) {
                icon.className = 'bx bx-show';
            } else {
                icon.className = 'bx bx-hide';
            }
        }
    </script>

</body>

</html>
