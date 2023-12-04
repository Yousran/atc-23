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
    @stack('style')


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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <x-table :table-name="$tableName" :json-link="$jsonLink" :columns="$columns"/>
                </div>
            </div>
        </div>
    </section>
    
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/sidebar.js') }}"></script>
    @stack('script')
</body>

</html>
