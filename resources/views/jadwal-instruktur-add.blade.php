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
                                    $jadwalsForDayAndTime = $jadwals->where('day_id', $day->id)->where('time_id', $time->id);
                                @endphp
                                @if($jadwalsForDayAndTime->count() > 0)
                                    <td class="droppable">
                                        @foreach ($jadwalsForDayAndTime as $jadwal)
                                            <div class="badge text-bg-info draggable">{{ $jadwal->group->group_name }}
                                                <span class="badge rounded-pill text-bg-primary">{{ $jadwal->tutor->user->username }}</span>
                                            </div>
                                        @endforeach
                                    </td>
                                @else
                                    <td class="droppable"></td>
                                @endif
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </x-col>

    <x-col ukuran="12">
        <h2>Add New Timetable Entry</h2>

    <form action="{{ route('jadwal.timetable.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="group_id">Group:</label>
            <select id="group_id" name="group_id" class="form-control">
                @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="day_id">Day:</label>
            <select id="day_id" name="day_id" class="form-control">
                @foreach ($days as $day)
                    <option value="{{ $day->id }}">{{ $day->day_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="time_id">Time:</label>
            <select id="time_id" name="time_id" class="form-control">
                @foreach ($times as $time)
                    <option value="{{ $time->id }}">{{ $time->num_time }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tutor_id">Tutor:</label>
            <select id="tutor_id" name="tutor_id" class="form-control">
                @foreach ($tutors as $tutor)
                    <option value="{{ $tutor->id }}">{{ $tutor->data->user->username }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Timetable Entry</button>
    </form>
    </x-col>
@endsection
@push('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
<script>
$( function() {
  $( ".draggable" ).draggable({
    snap: ".droppable",
    snapMode: "inner"
  });
  $( ".droppable" ).droppable({
    drop: function( event, ui ) {
      $( this )
        .addClass( "ui-state-highlight" )
        .find( "p" )
          .html( "Dropped!" );
    }
  });
} );


</script>
<script>
$('#save-button').click(function() {
  var timetableState = getTimetableState(); // You need to implement this function
  $.post('/save-timetable', timetableState);
});

</script>
<script>
$('.timetable-cell').click(function() {
  var cellData = $(this).data();
  if (cellData) {
    // This cell has data, populate the form fields
    $('#group_id').val(cellData.group_id);
    // ... populate other fields ...
  } else {
    // This cell does not have data, clear the form fields
    $('#group_id').val('');
    // ... clear other fields ...
  }
  $('#form-modal').modal('show');
});

</script>
@endpush