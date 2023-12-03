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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th onclick="sortTable(0,'myTable')"><span class="text"style="user-select: none;">#</span><i class='bx'></i></th>
                                        <th onclick="sortTable(1,'myTable')"><span class="text"style="user-select: none;">Username</span><i class='bx'></i></th>
                                        <th onclick="sortTable(2,'myTable')"><span class="text"style="user-select: none;">Role</span><i class='bx'></i></th>
                                        <th onclick="sortTable(3,'myTable')"><span class="text"style="user-select: none;">Birthday</span><i class='bx'></i></th>
                                        <th onclick="sortTable(4,'myTable')"><span class="text"style="user-select: none;">addby</span><i class='bx'></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>pengguna</td>
                                        <td>guest</td>
                                        <td>02/03/2004</td>
                                        <td>02/03/2004</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>aengguna</td>
                                        <td>guest</td>
                                        <td>02/03/2004</td>
                                        <td>guest</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mb-2">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                        <script>
                            function sortTable(n, tableId) {
                                var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                                table = document.getElementById(tableId);
                                switching = true;
                                dir = "asc"; 
                                while (switching) {
                                    switching = false;
                                    rows = table.rows;
                                    for (i = 1; i < (rows.length - 1); i++) {
                                    shouldSwitch = false;
                                    x = rows[i].getElementsByTagName("TD")[n];
                                    y = rows[i + 1].getElementsByTagName("TD")[n];
                                    if (dir == "asc") {
                                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                        shouldSwitch= true;
                                        break;
                                        }
                                    } else if (dir == "desc") {
                                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                        shouldSwitch = true;
                                        break;
                                        }
                                    }
                                    }
                                    if (shouldSwitch) {
                                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                                    switching = true;
                                    switchcount ++;      
                                    } else {
                                    if (switchcount == 0 && dir == "asc") {
                                        dir = "desc";
                                        switching = true;
                                    }
                                    }
                                }
                                var headers = table.getElementsByTagName("TH");
                                for (i = 0; i < headers.length; i++) {
                                    headers[i].getElementsByTagName("i")[0].className = 'bx';
                                }
                                if (dir == "asc") {
                                    headers[n].getElementsByTagName("i")[0].className = 'bx bxs-chevron-down align-middle';
                                } else {
                                    headers[n].getElementsByTagName("i")[0].className = 'bx bxs-chevron-up align-middle';
                                }
                            }
                        </script>
                        <script>
                            // Fungsi untuk menampilkan halaman tertentu dari tabel
                            function showPage(pageNumber, tableId) {
                                var table = document.getElementById(tableId);
                                var rows = table.getElementsByTagName("tr");
                                var i, row;
                                
                                // Sembunyikan semua baris tabel
                                for (i = 0; i < rows.length; i++) {
                                    row = rows[i];
                                    row.style.display = "none";
                                }
                                
                                // Tampilkan baris untuk halaman ini
                                var startRow = (pageNumber - 1) * rowsPerPage;
                                var endRow = startRow + rowsPerPage;
                                endRow = endRow > rows.length ? rows.length : endRow;
                                for (i = startRow; i < endRow; i++) {
                                    row = rows[i];
                                    row.style.display = "";
                                }
                            }

                            // Fungsi untuk menangani klik pada link pagination
                            function onPageClick(event) {
                                var target = event.target;
                                
                                // Dapatkan nomor halaman dari teks link
                                var pageNumber = parseInt(target.textContent);
                                
                                // Tampilkan halaman ini
                                showPage(pageNumber, 'myTable');
                            }

                            // Dapatkan semua link pagination
                            var pageLinks = document.getElementsByClassName("page-link");

                            // Tambahkan event listener untuk setiap link
                            for (var i = 0; i < pageLinks.length; i++) {
                                var link = pageLinks[i];
                                link.addEventListener("click", onPageClick);
                            }

                        </script>
                            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>

    <script src="{{ asset('/js/sidebar.js') }}"></script>
</body>

</html>
