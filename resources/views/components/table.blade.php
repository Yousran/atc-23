@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endpush

<div class="table-responsive">
    <table id="{{ $tableName }}" class="table" style="width:100%">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <th>{{ ucwords(str_replace('_', ' ', strstr($column, '.') ? substr(strrchr($column, "."), 1) : $column)) }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@push('script')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function(){
            $('#{{ $tableName }}').DataTable({
                ajax: '{{ $jsonLink }}',
                processing: true,
                serverSide: true,
                pagingType: 'full_numbers',
                columns:[
                    @foreach ($columns as $column)
                    {data: '{{ $column }}', name:'{{ $column }}'},
                    @endforeach
                ]
            });
        });
    </script>
@endpush
