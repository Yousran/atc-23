@extends('layouts.with-sidebar')

@section('columns')    
    <x-col ukuran='12'>
        <h5 class="card-title">Card title</h5>
        <x-table :table-name="$tableName" :json-link="$jsonLink" :columns="$columns"/>
    </x-col>
@endsection