<div class="sidebar close">
    <header>
    <div class="logo-details">
        <i><img src="{{ asset('/icons/logo-alkahfi.svg') }}" alt="logo-alkahfi" ></i>
        <span class="logo_name">Al-Kahfi TC</span>
    </div>

    <i class='bx bx-chevron-right toggle'></i>
    </header>
    <ul class="nav-links">
    @if (Session::get('element_rules.dashboard','0')==1) 
        <li class="menu-head">
            <a href="">
                <i class='bx bx-home'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="">Dashboard</a></li>
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.program_kursus','0')==1) 
        <li class="menu-head">
            <a href="#">
                <i class='bx bx-collection'></i>
                <span class="link_name">Program Kursus</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Program Kursus</a></li>
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.daftar','0')==1) 
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
                @if (Session::get('element_rules.daftar_peserta','0')==1) 
                <li><a href="#"><i class='bx bx-group'></i>Peserta</a></li>
                @endif
                @if (Session::get('element_rules.daftar_instruktur','0')==1) 
                <li><a href="#"><i class='bx bx-chalkboard'></i>Instruktur</a></li>
                @endif
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.superuser','0')==1) 
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
                @if (Session::get('element_rules.role_permission','0')==1) 
                <li><a href=""><i class='bx bx-key'></i>Role Permission</a></li>
                @endif
                @if (Session::get('element_rules.config','0')==1) 
                <li><a href="#"><i class='bx bx-terminal'></i>Config</a></li>
                @endif
                @if (Session::get('element_rules.logs','0')==1) 
                <li><a href="#"><i class='bx bx-history'></i>Logs</a></li>
                @endif
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.instruktur','0')==1)        
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
                @if (Session::get('element_rules.daftar_kelas_instruktur','0')==1) 
                <li><a href="#"><i class='bx bxs-school'></i>Daftar Kelas</a></li>
                @endif
                @if (Session::get('element_rules.jadwal_instruktur','0')==1) 
                <li><a href="#"><i class='bx bx-calendar-event'></i>Jadwal</a></li>
                @endif
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.peserta','0')==1) 
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
                @if (Session::get('element_rules.kelas_peserta','0')==1) 
                <li><a href="#"><i class='bx bxs-school'></i>Kelas</a></li>
                @endif
                @if (Session::get('element_rules.jadwal_peserta','0')==1) 
                <li><a href="#"><i class='bx bx-calendar-event'></i>Jadwal</a></li>
                @endif
                @if (Session::get('element_rules.sertifikat_peserta','0')==1) 
                <li><a href="#"><i class='bx bx-medal'></i>Sertifikat</a></li>
                @endif
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.operator','0')==1) 
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
                @if (Session::get('element_rules.konfirm_pendaftar','0')==1) 
                <li><a href="#"><i class='bx bx-user-check'></i>Konfirm Pendaftar</a></li>
                @endif
                @if (Session::get('element_rules.jadwal','0')==1) 
                <li><a href="#"><i class='bx bx-calendar-event'></i>Jadwal</a></li>
                @endif
                @if (Session::get('element_rules.sertifikat_operator','0')==1) 
                <li><a href="#"><i class='bx bx-medal'></i>Sertifikat</a></li>
                @endif
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.bendahara','0')==1) 
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
                @if (Session::get('element_rules.kas','0')==1) 
                <li><a href="#"><i class='bx bx-wallet'></i>Kas</a></li>
                @endif
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.sekretaris','0')==1) 
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
                @if (Session::get('element_rules.cetak_sertifikat','0')==1) 
                <li><a href="#"><i class='bx bx-printer'></i>Cetak Sertifikat</a></li>
                @endif
                @if (Session::get('element_rules.penomoran_surat','0')==1) 
                <li><a href="#"><i class='bx bx-envelope'></i>Penomoran Surat</a></li>
                @endif
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.tabel','0')==1) 
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
            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.chart','0')==1) 
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
                @foreach (Session::get('table_rules') as $rule)
                @php
                    $tableName = $rule['table_list']['table_name'];
                    $routeName = str_replace('_', '-', $tableName);
                @endphp
                @if ($rule['view'] == 1 && ($tableName == 'courses' || $tableName == 'data' || $tableName == 'education' || $tableName == 'element_rules' || $tableName == 'genders' || $tableName == 'jobs' || $tableName == 'payment_stats' || $tableName == 'religions'||$tableName == 'roles'||$tableName == 'settings'||$tableName == 'table_lists'||$tableName == 'table_rules'||$tableName == 'users'))
                    <li>
                        <a href="{{ route($routeName) }}">
                            <i class='bx bx-pie-chart-alt-2'></i>
                            {{ ucwords(str_replace('_', ' ', strstr($tableName, '.') ? substr(strrchr($tableName, "."), 1) : $tableName)) }}
                        </a>
                    </li>
                @endif
            @endforeach

            </ul>
        </li>
    @endif
    @if (Session::get('element_rules.tutorial','0')==1) 
        <li class="menu-head">
            <a href="#">
                <i class='bx bx-play'></i>
                <span class="link_name">Tutorial</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Tutorial</a></li>
            </ul>
        </li>
    @endif

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
                <a href="{{ Session::has('username') ? route('profil') : route('login') }}">
                    @if (Session::has('username'))   
                        <div class="profile-content">
                            <img src="{{ asset('/images/'.Session::get('photo','guest-photo.png')) }}" alt="profileImg">
                        </div>
                        <div class="name-job">
                            <div class="profile_name">{{ Session::get('username') }}</div>
                            <div class="job">{{ Session::get('role_name') }}</div>
                        </div>
                    @else
                        <div class="profile-content">
                            <img src="{{ asset('/images/'.Session::get('photo','guest-photo.png')) }}" alt="profileImg">
                        </div>
                        <div class="name-job">
                            <div class="profile_name">Guest</div>
                            <div class="job">guest</div>
                        </div>
                    @endif
                </a>
                <a href="{{ route('logout') }}">
                    <i class='bx bx-log-out logout'></i>
                </a>
            </div>
        </li>
    </ul>
</div>

@push('script')
    <script src="{{ asset('/js/sidebar.js') }}"></script>
@endpush