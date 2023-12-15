@extends('layouts.with-sidebar')
@section('styles')
    <style>
        #darklight-1 {
            height: 5rem;
            width: 5rem;
            background-color: transparent;
            display: flex;
            align-items: stretch;
            overflow: hidden;
            position: relative;
            border: none;
            border-radius: 9999px;
            filter: none;
            transition: all 0.25s ease;
        }

        #sun {
            z-index: 1;
            width: 4.49rem;
            height: 4.49rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            border: 0;
            border-radius: 9999px;
            appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
            background-color: var(--bs-warning);
            transition: all 0.25s ease;
        }

        .moon {
            z-index: 1;
            position: absolute;
            top: 50%;
            left: 90%;
            transform: translate(-50%, -50%);
            width: 4.5rem;
            height: 4.5rem;
            border-radius: 9999px;
            background-color: rgba(var(--bs-body-bg-rgb));
            transition: all 0.25s ease;
            pointer-events: none;
        }


        input:checked ~ .moon {
            height: 4.4rem;
            width: 0rem;
            border-style: solid;
            border: 0;
            border-radius: 9999px;
            top: 50%;
            left: 150%;
            background-color: rgba(var(--bs-body-bg-rgb));
            transform: translate(-50%, -50%);
        }

    </style>
@endsection

@section('columns')
<x-col ukuran='12'>
    <div class="d-flex justify-content-start align-items-center">
        <div id="darklight-1" class="theme-switcher d-flex align-items-center justify-content-center">
            <input class="sun" type="checkbox" name="dark_mode" id="sun" value="{{ Session::get('setting.dark_mode') == 1 ? '0' : '1' }}" {{ Session::get('setting.dark_mode') == 1 ? '' : 'checked' }}/>
            <span class="moon"></span>
        </div>
        <h1 class="text h1 align-middle mx-3" id="modename">{{ Session::get('setting.dark_mode') == 1 ? 'Dark Mode' : 'Light Mode' }}</h1>
    </div>
    
</x-col>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    // Define the initial theme state
    let isLightTheme = {{ Session::get('setting.dark_mode') == 1 ? 'false' : 'true' }};
    const modeElement = document.getElementById('modename');

    // Function to toggle the theme
    function toggleTheme() {
        isLightTheme = !isLightTheme;
        document.documentElement.setAttribute("data-bs-theme", isLightTheme ? "light" : "dark");
        modeElement.innerHTML = isLightTheme ? "Light Mode" : "Dark Mode";
    }

    // Get the sun checkbox element
    const sun = document.getElementById("sun");

    // Add an event listener to toggle the theme when the checkbox changes
    sun.addEventListener("change", function() {
        toggleTheme();
        // Prepare the data to send
        const data = new FormData();
        data.append('setting_id', '{{ Session::get('setting.id') }}');
        data.append('dark_mode', this.value);

        // Send a POST request
        fetch('{{ route('settings.update') }}', {
            method: 'POST',
            body: data,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }).then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        }).then(data => {
            console.log('Success:', data);
        }).catch((error) => {
            console.error('Error:', error);
        });
        this.value = this.checked ? '0' : '1';
    });

</script>
@endpush



