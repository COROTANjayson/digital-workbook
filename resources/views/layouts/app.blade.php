<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/datetimepicker@latest/dist/DateTimePicker.min.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/datetimepicker@latest/dist/DateTimePicker.min.js" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
</head>

<body>
    <div  id="app">
        <div class="container-fluid">
            <div class="border border-dark m-3 height">
                
                <main class="pb-4 px-4">
                    {{-- @include('inc.messages') --}}
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>