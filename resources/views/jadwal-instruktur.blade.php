@extends('layouts.with-sidebar')

@section('styles')

@endsection

@section('columns')    
    <x-col ukuran='12'>
        <div class="container">
            <div class="timetable-img text-center">
                <img src="img/content/timetable.png" alt="">
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr class="bg-light-gray">
                            <th class="text-uppercase">Time</th>
                            @foreach ($days as $day)
                                <th class="text-uppercase">{{ $day->day_name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($times as $time)
                        <tr>
                            <td class="align-middle">{{ $time->num_time }}</td>
                            @foreach ($days as $day)
                                @php
                                    $jadwal = $jadwals->where('day_id', $day->id)->where('time_id', $time->id)->first();
                                @endphp
                                @if($jadwal)
                                    <td>
                                        <span class="badge text-bg-primary">{{ $jadwal->group->group_name }}</span>
                                    </td>
                                @else
                                    <td></td>
                                @endif
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text">{{ $jadwals }}</div>
            </div>
        </div>
    </x-col>
@endsection
