@extends('layouts.with-sidebar')

@section('styles')
@endsection

@section('columns')    
<x-col ukuran='12'>
  <h1>LOGS</h1>
  <table id="logTable" class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Event</th>
        <th scope="col">Timestamp</th>
      </tr>
    </thead>
    <tbody>
      <!-- Data log akan dimuat di sini oleh jQuery -->
    </tbody>
  </table>
</x-col>
@endsection

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function loadLogs() {
    $.ajax({
        url: "{{ route('config.logs.json') }}",
        type: 'GET',
        success: function(data) {
            var html = '';
            for(var i=0; i<data.length; i++){
                var date = new Date(data[i].created_at);
                html += '<tr><td>' + data[i].username + '</td><td>' + data[i].event + '</td><td>' + date.toLocaleString() + '</td></tr>';
            }
            $('#logTable tbody').html(html);
        }
    });
}

$(document).ready(function() {
    loadLogs(); // memuat data saat halaman dimuat
    setInterval(loadLogs, 5000); // memperbarui data setiap 60 detik
});
</script>
@endpush

