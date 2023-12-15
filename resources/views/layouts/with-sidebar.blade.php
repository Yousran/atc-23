<!DOCTYPE html>
<html lang="en" data-bs-theme="{{ Session::get('setting.dark_mode') == 1 ? 'dark' : 'light' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">
    <link href="{{ asset('/icons/boxicons-2.1.4/css/boxicons.css') }}" rel='stylesheet'>
    
    @yield('styles')

</head>

<body>
    <x-sidebar/>

    <section class="content">
        <div class="row">
            @yield('columns')
        </div>
    </section>
    
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    @stack('script')
</body>

</html>
