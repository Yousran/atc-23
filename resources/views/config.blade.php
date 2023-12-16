@extends('layouts.with-sidebar')

@section('styles')

@endsection

@section('columns')  
<x-col ukuran='12'>
    <h1 class="card-title">Field Configuration</h1>
</x-col>  
<x-col ukuran='12'>
  <h4 class="card-title">Gender</h4>
        <div class="table-responsive-sm">
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
            <form action="{{ route('config.gender.make') }}" method="post">
                @csrf
                <div class="input-group mt-2">
                    <input type="text" class="form-control" name="gender_name" placeholder="Enter new gender">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
</x-col>
<x-col ukuran='12'>
  <h4 class="card-title">Job</h4>
        <div class="table-responsive-sm">
            @foreach ($jobs as $job)
            <form action="{{ route('config.job.edit') }}" method="post">
                <div class="input-group mt-2">
                    @csrf
                    <input type="hidden" class="form-control" name="id" value="{{ $job->id }}">
                    <input type="text" class="form-control" name="job_name" value="{{ $job->job_name }}">
                    <input type="submit" class="btn btn-primary" value="Update">
                    <a class="btn btn-danger" onclick="jobDelete('{{ $job->id }}')">Delete</a>
                </form>
            </div>
            @endforeach
            <form action="{{ route('config.job.make') }}" method="post">
                @csrf
                <div class="input-group mt-2">
                    <input type="text" class="form-control" name="job_name" placeholder="Enter new job">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
</x-col>
<x-col ukuran='12'>
    <h4 class="card-title">Education</h4>
    <div class="table-responsive-sm">
        @foreach ($educations as $education)
        <form action="{{ route('config.education.edit') }}" method="post">
            <div class="input-group mt-2">
                @csrf
                <input type="hidden" class="form-control" name="id" value="{{ $education->id }}">
                <input type="text" class="form-control" name="education_name" value="{{ $education->education_name }}">
                <input type="submit" class="btn btn-primary" value="Update">
                <a class="btn btn-danger" onclick="educationDelete('{{ $education->id }}')">Delete</a>
            </form>
        </div>
        @endforeach
        <form action="{{ route('config.education.make') }}" method="post">
            @csrf
            <div class="input-group mt-2">
                <input type="text" class="form-control" name="education_name" placeholder="Enter new education">
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
    </div>
</x-col>
<x-col ukuran='12'>
    <h4 class="card-title">Religion</h4>
    <div class="table-responsive-sm">
        @foreach ($religions as $religion)
        <form action="{{ route('config.religion.edit') }}" method="post">
            <div class="input-group mt-2">
                @csrf
                <input type="hidden" class="form-control" name="id" value="{{ $religion->id }}">
                <input type="text" class="form-control" name="religion_name" value="{{ $religion->religion_name }}">
                <input type="submit" class="btn btn-primary" value="Update">
                <a class="btn btn-danger" onclick="religionDelete('{{ $religion->id }}')">Delete</a>
            </form>
        </div>
        @endforeach
        <form action="{{ route('config.religion.make') }}" method="post">
            @csrf
            <div class="input-group mt-2">
                <input type="text" class="form-control" name="religion_name" placeholder="Enter new religion">
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
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
  function jobDelete(id) {
      // Create a new FormData object
      const formData = new FormData();
      formData.append('id', id); // Add ID parameter to the form data

      // Send POST request with fetch API
      fetch('/config/job/hapus', {
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
  function educationDelete(id) {
      // Create a new FormData object
      const formData = new FormData();
      formData.append('id', id); // Add ID parameter to the form data

      // Send POST request with fetch API
      fetch('/config/education/hapus', {
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
  function religionDelete(id) {
      // Create a new FormData object
      const formData = new FormData();
      formData.append('id', id); // Add ID parameter to the form data

      // Send POST request with fetch API
      fetch('/config/religion/hapus', {
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