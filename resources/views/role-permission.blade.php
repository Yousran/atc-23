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
            <x-col ukuran='9'>
                <h5 class="card-title">Table Rules</h5>
                        <div class="modal fade" id="tambah_role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Role</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('role-permission.addrole') }}" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            @csrf
                                            <label class="form-label">Role Name</label>
                                            <input type="text" class="form-control" name="role_name" placeholder="Peserta">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea type="text" class="form-control" name="desc" placeholder="Description"></textarea>
                                        </div>
                                        {{-- Upload FOto Role --}}
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                <form action="{{ route('role-permission.deleterole') }}" method="post">
                                    <div class="modal-body">
                                        @csrf
                                        <input type="hidden" name="role_id_delete" value="">
                                        <h3>Apakah Anda Yakin Ingin Menghapus?</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="btn-group">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_role" id='hapus_role_button'>Hapus Role</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah_role">Add New Role</button>
                            </div>
                        </div>
                        <form action="{{ Route('role-permission.update') }}" method="post">
                            @csrf
                            <ul class="nav nav-tabs pt-3" role="tablist">
                                @foreach ($roles as $role)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#panel{{ $role->id }}">{{ $role->role_name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach ($roles as $role)
                                    <div class="tab-pane role fade show {{ $loop->first ? 'active' : '' }}" id="panel{{ $role->id }}" role="tabpanel">
                                    <input type="hidden" value="{{ $role->id }}">
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
                                                @foreach ($role->table_rules as $table_rule)
                                                <tr>
                                                    <td>{{ $table_rule->tableList->table_name }}</td>
                                                    <td style="text-align: center"><input class="form-check-input all" type="checkbox"onclick="toggleAll(this)"></td>
                                                    <td style="text-align: center"><input class="form-check-input" type="checkbox" name="view[{{ $table_rule->id }}]" value="{{ $table_rule->view }}" onclick="checkAll(this)" {{ $table_rule->view ? 'checked' : '' }}></td>
                                                    <td style="text-align: center"><input class="form-check-input" type="checkbox" name="add[{{ $table_rule->id }}]" value="{{ $table_rule->add }}" onclick="checkAll(this)" {{ $table_rule->add ? 'checked' : '' }}></td>
                                                    <td style="text-align: center"><input class="form-check-input" type="checkbox" name="edit[{{ $table_rule->id }}]" value="{{ $table_rule->edit }}" onclick="checkAll(this)" {{ $table_rule->edit ? 'checked' : '' }}></td>
                                                    <td style="text-align: center"><input class="form-check-input" type="checkbox" name="export[{{ $table_rule->id }}]" value="{{ $table_rule->export }}" onclick="checkAll(this)" {{ $table_rule->export ? 'checked' : '' }}></td>
                                                    <td style="text-align: center"><input class="form-check-input" type="checkbox" name="soft_delete[{{ $table_rule->id }}]" value="{{ $table_rule->soft_delete }}" onclick="checkAll(this)" {{ $table_rule->soft_delete ? 'checked' : '' }}></td>
                                                    <td style="text-align: center"><input class="form-check-input" type="checkbox" name="hard_delete[{{ $table_rule->id }}]" value="{{ $table_rule->hard_delete }}" onclick="checkAll(this)" {{ $table_rule->hard_delete ? 'checked' : '' }}></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endforeach

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
            </x-col>
            <x-col ukuran='3'>
                        <h5 class="card-title">Sidebar Rules</h5>
                        <ul class="nav nav-tabs pt-3" role="tablist">
                            @foreach ($roles as $role)    
                                <li class="nav-item">
                                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#elemetrule{{ $role->id }}">{{ $role->role_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach ($roles as $role)    
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="elemetrule{{ $role->id }}" role="tabpanel">
                                <h3>{{ $role->role_name }}</h3>
                                <div style="display: flex; align-items: center;">
                                    <i id="dashboard{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->dashboard ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Dashboard</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="program_kursus{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->program_kursus ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Program Kursus</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->daftar ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Daftar</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_peserta{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->daftar_peserta ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Pendaftaran Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_instruktur{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->daftar_instruktur ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Pendaftaran Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="superuser{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->superuser ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Superuser</div>
                                </div> 
                                <div style="display: flex; align-items: center;">
                                    <i id="role_permission{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->role_permission ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Role Permission</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="config{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->config ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Config</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="logs{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->logs ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">logs</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="instruktur{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->instruktur ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="daftar_kelas_instruktur{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->daftar_kelas_instruktur ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Daftar Kelas Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal_instruktur{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->jadwal_instruktur ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal Instruktur</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="peserta{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->peserta ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="kelas_peserta{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->kelas_peserta ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Kelas Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal_peserta{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->jadwal_peserta ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="sertifikat_peserta{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->sertifikat_peserta ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sertifikat Peserta</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="operator{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->operator ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Operator</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="konfirm_pendaftar{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->konfirm_pendaftar ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Konfirmasi Pendaftar</div>
                                </div>                        
                                <div style="display: flex; align-items: center;">
                                    <i id="jadwal{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->jadwal ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Jadwal</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="sertifikat_operator{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->sertifikat_operator ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sertifikat Operator</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="bendahara{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->bendahara ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Bendahara</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="kas{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->kas ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Kas</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="sekretaris{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->sekretaris ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Sekretaris</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="cetak_sertifikat{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->cetak_sertifikat ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Cetak Sertifikat</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="penomoran_surat{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->penomoran_surat ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Penomoran Surat</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="tabel{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->tabel ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Tabel</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="chart{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->chart ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Chart</div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <i id="tutorial{{ $role->id }}" style="font-size: 2rem" class='bx {{ $role->element_rules->tutorial ? "bx-show" : "bx-hide" }}' onclick="toggleIcon(this)"></i>
                                    <div class="text">Tutorial</div>
                                </div>                                                   
                                <form action="{{ route('role-permission.sidebar') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $role->id }}">
                                    <input type="checkbox" id="check_dashboard{{ $role->id }}" name="dashboard" style="display: none" value="{{ $role->element_rules->dashboard }}" {{ $role->element_rules->dashboard ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_program_kursus{{ $role->id }}" name="program_kursus" style="display: none" value="{{ $role->element_rules->program_kursus }}" {{ $role->element_rules->program_kursus ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_daftar{{ $role->id }}" name="daftar" style="display: none" value="{{ $role->element_rules->daftar }}" {{ $role->element_rules->daftar ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_daftar_peserta{{ $role->id }}" name="daftar_peserta" style="display: none" value="{{ $role->element_rules->daftar_peserta }}" {{ $role->element_rules->daftar_peserta ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_daftar_instruktur{{ $role->id }}" name="daftar_instruktur" style="display: none" value="{{ $role->element_rules->daftar_instruktur }}" {{ $role->element_rules->daftar_instruktur ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_superuser{{ $role->id }}" name="superuser" style="display: none" value="{{ $role->element_rules->superuser }}" {{ $role->element_rules->superuser ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_role_permission{{ $role->id }}" name="role_permission" style="display: none" value="{{ $role->element_rules->role_permission }}" {{ $role->element_rules->role_permission ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_config{{ $role->id }}" name="config" style="display: none" value="{{ $role->element_rules->config }}" {{ $role->element_rules->config ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_logs{{ $role->id }}" name="logs" style="display: none" value="{{ $role->element_rules->logs }}" {{ $role->element_rules->logs ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_instruktur{{ $role->id }}" name="instruktur" style="display: none" value="{{ $role->element_rules->instruktur }}" {{ $role->element_rules->instruktur ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_daftar_kelas_instruktur{{ $role->id }}" name="daftar_kelas_instruktur" style="display: none" value="{{ $role->element_rules->daftar_kelas_instruktur }}" {{ $role->element_rules->daftar_kelas_instruktur ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_jadwal_instruktur{{ $role->id }}" name="jadwal_instruktur" style="display: none" value="{{ $role->element_rules->jadwal_instruktur }}" {{ $role->element_rules->jadwal_instruktur ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_peserta{{ $role->id }}" name="peserta" style="display: none" value="{{ $role->element_rules->peserta }}" {{ $role->element_rules->peserta ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_kelas_peserta{{ $role->id }}" name="kelas_peserta" style="display: none" value="{{ $role->element_rules->kelas_peserta }}" {{ $role->element_rules->kelas_peserta ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_jadwal_peserta{{ $role->id }}" name="jadwal_peserta" style="display: none" value="{{ $role->element_rules->jadwal_peserta }}" {{ $role->element_rules->jadwal_peserta ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_sertifikat_peserta{{ $role->id }}" name="sertifikat_peserta" style="display: none" value="{{ $role->element_rules->sertifikat_peserta }}" {{ $role->element_rules->sertifikat_peserta ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_operator{{ $role->id }}" name="operator" style="display: none" value="{{ $role->element_rules->operator }}" {{ $role->element_rules->operator ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_konfirm_pendaftar{{ $role->id }}" name="konfirm_pendaftar" style="display: none" value="{{ $role->element_rules->konfirm_pendaftar }}" {{ $role->element_rules->konfirm_pendaftar ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_jadwal{{ $role->id }}" name="jadwal" style="display: none" value="{{ $role->element_rules->jadwal }}" {{ $role->element_rules->jadwal ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_sertifikat_operator{{ $role->id }}" name="sertifikat_operator" style="display: none" value="{{ $role->element_rules->sertifikat_operator }}" {{ $role->element_rules->sertifikat_operator ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_bendahara{{ $role->id }}" name="bendahara" style="display: none" value="{{ $role->element_rules->bendahara }}" {{ $role->element_rules->bendahara ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_kas{{ $role->id }}" name="kas" style="display: none" value="{{ $role->element_rules->kas }}" {{ $role->element_rules->kas ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_sekretaris{{ $role->id }}" name="sekretaris" style="display: none" value="{{ $role->element_rules->sekretaris }}" {{ $role->element_rules->sekretaris ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_cetak_sertifikat{{ $role->id }}" name="cetak_sertifikat" style="display: none" value="{{ $role->element_rules->cetak_sertifikat }}" {{ $role->element_rules->cetak_sertifikat ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_penomoran_surat{{ $role->id }}" name="penomoran_surat" style="display: none" value="{{ $role->element_rules->penomoran_surat }}" {{ $role->element_rules->penomoran_surat ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_tabel{{ $role->id }}" name="tabel" style="display: none" value="{{ $role->element_rules->tabel }}" {{ $role->element_rules->tabel ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_chart{{ $role->id }}" name="chart" style="display: none" value="{{ $role->element_rules->chart }}" {{ $role->element_rules->chart ? 'checked' : '' }}>
                                    <input type="checkbox" id="check_tutorial{{ $role->id }}" name="tutorial" style="display: none" value="{{ $role->element_rules->tutorial }}" {{ $role->element_rules->tutorial ? 'checked' : '' }}>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Save {{ ucfirst($role->role_name) }} Element Rule</button>
                                    </div>
                                </form>                                
                            </div>
                            @endforeach
                        </div>
                        
            </x-col>
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
                checkboxes[i].value  = element.checked ? '1' : '0'; // Update the value based on whether the checkbox is checked
            }
        }

        function checkAll(element) {
            var checkboxes = element.parentElement.parentElement.querySelectorAll('input[type=checkbox]');
            var allCheckbox = element.parentElement.parentElement.querySelector('input.all');
            var allChecked = true;
            for (var i = 1; i < checkboxes.length; i++) { // Start from 1 to skip the 'all' checkbox
                if (!checkboxes[i].checked) {
                    allChecked = false;
                    checkboxes[i].value = '0'; // Update the value to '0' when the checkbox is unchecked
                } else {
                    checkboxes[i].value = '1'; // Update the value to '1' when the checkbox is checked
                }
            }
            allCheckbox.checked = allChecked;
        }
    </script>
    <script>
        function toggleIcon(element) {
            var checkbox = document.getElementById("check_" + element.id);
            var icon = element;
    
            // Toggle the checkbox
            checkbox.checked = !checkbox.checked;
            checkbox.value = checkbox.checked ? 1 : 0;
    
            // Change the icon class based on the checkbox state
            if (checkbox.checked) {
                icon.className = 'bx bx-show';
            } else {
                icon.className = 'bx bx-hide';
            }
        }
    </script>
    <script>
        document.getElementById("hapus_role_button").addEventListener("click", function(){
            var role_pane_active = document.getElementsByClassName("tab-pane role fade show active")[0];
            var id_role = role_pane_active.firstElementChild.value;

            // Dapatkan elemen input dengan name="role_id_delete"
            var inputElement = document.getElementsByName("role_id_delete")[0];

            // Atur nilai dari elemen input tersebut
            inputElement.value = id_role;
            console.log(role_pane_active);
            console.log(id_role);
        });
    </script>
</body>

</html>
