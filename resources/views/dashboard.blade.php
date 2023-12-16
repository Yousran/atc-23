@extends('layouts.with-sidebar')

@section('styles')
    <style>
        .key {
  color: green;
}

    </style>
@endsection

@section('columns')    
<x-col ukuran='12'>
    <h1>Dashboard</h1>
    <ul>
      @foreach ($sessionData as $key => $value)
        <li><div class="key">{{ $key }} : </div>
            <div>
                @if (is_array($value))
                {{ json_encode($value) }}
                @else
                {{ $value }}
                @endif
            </div>
        </li>
      @endforeach
    </ul>
  </x-col>
@endsection