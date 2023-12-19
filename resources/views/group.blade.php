@extends('layouts.with-sidebar')

@section('styles')
@endsection

@section('columns')

@foreach ($groups as $group)
<x-col ukuran='3'>
    <h2>{{ $group->group_name }}</h2>
    <h3 class="text-secondary">{{ $group->course->course_name }}</h3>
</x-col>
@endforeach 
@endsection