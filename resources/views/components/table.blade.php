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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js"></script>
    <script>
        $(function(){
            $('#{{ $tableName }}').DataTable({
                ajax: '{{ $jsonLink }}',
                processing: true,
                serverSide: true,
                pagingType: 'full_numbers',
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf'
                ],
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                columns:[
                    @foreach ($columns as $column)
                        @if ($column == 'created_at' || $column == 'updated_at')
                            {data: '{{ $column }}', name:'{{ $column }}', render: function(data, type, row) {
                                return moment.utc(data).local().format('DD/MM/YYYY HH:mm:ss');
                            }},
                        @else
                            {data: '{{ $column }}', name:'{{ $column }}'},
                        @endif
                    @endforeach
                ]
            });
        });
    </script>
@endpush
