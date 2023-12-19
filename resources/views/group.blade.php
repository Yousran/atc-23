@extends('layouts.with-sidebar')

@section('styles')
@endsection

@section('columns')

@foreach ($groups as $group)
<x-col ukuran='3'>
    <h2>{{ $group->group_name }}</h2>
    <h3 class="text-secondary">{{ $group->course->course_name }}</h3>
    <p>Jumlah Pertemuan: {{ $group->num_meet }}</p>
    <h4>Peserta:</h4>
    <ul>
    @foreach ($group->attendants as $attendant)
        <li>{{ $attendant->data->user->username }}</li>
    @endforeach
    </ul>
</x-col>
@endforeach

@endsection