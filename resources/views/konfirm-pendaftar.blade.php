@extends('layouts.with-sidebar')

@section('styles')
@endsection

@section('columns')
@foreach ($attendants as $attendant)
<x-col ukuran='4'>
  <form action="{{ route('operator.createattendant') }}" method="post">
    @csrf
    <input type="hidden" name="attendant_id" value="{{ $attendant->id }}">
    <div class="col">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name="username" value="{{ $attendant->data->user->username }}">
    </div>
    <div class="col">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" name="surename" value="{{ $attendant->data->surename }}">
    </div>
    <div class="col">
      <label class="form-label">NIK</label>
      <input type="text" class="form-control" name="nik" value="{{ $attendant->data->nik ?? '' }}">
    </div>
    <div class="col">
      <label class="form-label">Alamat</label>
      <input type="text" class="form-control" name="address" value="{{ $attendant->data->address ?? '' }}">
    </div>
    <div class="col">
      <label class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" name="birthday" value="{{ $attendant->data->birthday ?? '' }}">
    </div>
    <div class="col">
      <label class="form-label">Gender</label>
      <select name="gender_id" class="form-select">
        @foreach($genders as $gender)
        <option value="{{$gender->id}}" {{ $attendant->data && $attendant->data->gender && $attendant->data->gender->id == $gender->id ? 'selected' : '' }}>{{$gender->gender_name}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
      <label class="form-label">Pendidikan Terakhir</label>
      <select name="education_id" class="form-select">
        @foreach($educations as $education)
        <option value="{{ $education->id }}" {{ $attendant->data && $attendant->data->education && $attendant->data->education->id == $education->id ? 'selected' : '' }}>{{ $education->education_name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
      <label class="form-label">Pekerjaan Terakhir</label>
      <select name="job_id" class="form-select">
        @foreach($jobs as $job)
        <option value="{{ $job->id }}" {{ $attendant->data && $attendant->data->job && $attendant->data->job->id == $job->id ? 'selected' : '' }}>{{ $job->job_name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
      <label class="form-label">Agama</label>
      <select name="religion_id" class="form-select">
        @foreach($religions as $religion)
        <option value="{{ $religion->id }}" {{ $attendant->data && $attendant->data->religion && $attendant->data->religion->id == $religion->id ? 'selected' : '' }}>{{ $religion->religion_name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
      <label class="form-label">Program Yang Akan Didaftar</label>
      <select name="course_id" class="form-select">
        @foreach($courses as $course)
        <option value="{{ $course->id }}"{{ $attendant->course_id == $course->id ? 'selected' : '' }}>{{ $course->course_name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
      <label class="form-label">Total Bayar</label>
      <input type="text" class="form-control" name="payment" value="{{ $attendant->payemnt }}">
    </div>
    <div class="col">
      <label class="form-label">Status Pembayaran</label>
      <select name="payment_stat_id" class="form-select">
        @foreach($payment_stats as $paystat)
        <option value="{{ $paystat->id }}">{{ $paystat->payment_stat_name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
      <label class="form-label">Rombongan Belajar</label>
      <select name="group_id" class="form-select">
        @foreach($groups as $group)
        @if ($group->course_id == $attendant->course_id)
          <option value="{{ $group->id }}">{{ $group->group_name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="col">
      <label class="form-label">Roles</label>
      <select name="role_id" class="form-select">
        @foreach($roles as $role)
        @if ($role->id != 1)
          <option value="{{ $role->id }}">{{ $role->role_name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="col mt-3 d-flex justify-content-end">
      <button type="submit" class="btn btn-primary">Konfirmasi Pendaftar</button>
    </div>
  </form>
</x-col>
@endforeach
@if($attendants->count()==0)
    <x-col ukuran='12'>
      <h1>Tidak Terdapat Pendaftar Baru</h1>
    </x-col>
@endif
@endsection