@extends('layouts.with-sidebar')

@section('styles')

@endsection

@section('columns')    
<x-col ukuran='12'>
  <h4 class="card-title">Gender</h4>
        <div class="table-responsive-sm">
            <form action="{{ route('config.gender.make') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" name="gender_name" placeholder="Enter new gender">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
            
            @foreach ($genders as $gender)
            <form action="{{ route('config.gender.edit') }}" method="post">
              <div class="input-group mt-2">
                    @csrf
                    <input type="hidden" class="form-control" name="id" value="{{ $gender->id }}">
                    <input type="text" class="form-control" name="gender_name" value="{{ $gender->gender_name }}">
                    <input type="submit" class="btn btn-primary" value="Update">
                    <a class="btn btn-danger" onclick="genderDelete('{{ $gender->id }}')">Delete</a>
                  </form>
                </div>
            @endforeach
        </div>
</x-col>
<x-col ukuran='12'>
  <h4 class="card-title">Job</h4>
  <div class="table-responsive-sm">
      <table class="table">
          <thead>
              <tr>
                  <td>#</td>
                  <td>Job Name</td>
              </tr>
          </thead>
          <tbody>
              @foreach ($jobs as $job)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $job->job_name }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</x-col>
<x-col ukuran='12'>
  <h4 class="card-title">Educations</h4>
  <div class="table-responsive-sm">
      <table class="table">
          <thead>
              <tr>
                  <td>#</td>
                  <td>Education Name</td>
              </tr>
          </thead>
          <tbody>
              @foreach ($educations as $education)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $education->education_name }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</x-col>
<x-col ukuran='12'>
  <h4 class="card-title">Religion</h4>
  <div class="table-responsive-sm">
      <table class="table">
          <thead>
              <tr>
                  <td>#</td>
                  <td>Religion Name</td>
              </tr>
          </thead>
          <tbody>
              @foreach ($religions as $religion)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $religion->religion_name }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</x-col>
@endsection

@push('script')
<script>
  function genderDelete(id) {
      // Create a new FormData object
      const formData = new FormData();
      formData.append('id', id); // Add ID parameter to the form data

      // Send POST request with fetch API
      fetch('/config/gender/hapus', {
          method: 'POST',
          body: formData,
          headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
          }
      }).then(data => {
            // Handle any processing of the response data if needed
            console.log(data);

            // Reload the page
            location.reload();
        })
      .catch(error => {
          // Handle any errors
          console.error(error);
      });
  }
</script>

    
@endpush