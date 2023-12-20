@extends('layouts.with-sidebar')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css">
@endsection

@section('columns')    
    <x-col ukuran='12'>
        <h5 class="card-title">Card title</h5>
        <x-table :table-name="$tableName" :json-link="$jsonLink" :columns="$columns"/>
    </x-col>
@endsection