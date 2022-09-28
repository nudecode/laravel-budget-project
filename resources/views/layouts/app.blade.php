<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{mix('assets/img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">

        <!-- Fontawesome -->
        <script
            src="https://kit.fontawesome.com/1e6705f353.js"
            crossorigin="anonymous"
        ></script>

        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ mix('css/ui.css') }}">
        <link rel="stylesheet" href="{{ mix('css/responsive.css') }}">
        {{-- <link rel="stylesheet" href="{{ mix('css/style.css') }}"> --}}

        <!-- iconfont -->
        <link rel="stylesheet" href="{{mix('fonts/material-icon/css/round.css')}}"/>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/jquery.js') }}" defer></script>
        <script src="{{ mix('js/bootstrap.bundle.min.js') }}" defer></script>
        {{-- <script src="{{ mix('js/bootstrap.min.js') }}" defer></script> --}}
        <script src="{{ mix('js/script.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/main.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        <x-jet-banner />
            @livewire('navigation-menu')

            <!-- Page Heading -->

            <header class="d-flex py-3 bg-white shadow-sm border-bottom">
                <div class="container">
                    {{ $header }}
                </div>
            </header>

    <div class="container">
        <!-- Page Content -->
        <!-- aside -->
        {{-- <x-nav-aside /> --}}

            {{ $slot }}
    </div>

        @stack('modals')

        <script type="text/javascript">
            if(localStorage.getItem("darkmode")){
                var body_el = document.body;
                body_el.className += 'dark';
            }
        </script>

        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        <!-- ChartJS files-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

        <!-- Custom JS -->
        <script src="js/script.js?v=1.0" type="text/javascript"></script>

        <!-- ChartJS customize-->
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [
                    {
                        label: 'Sales',
                        backgroundColor: 'rgb(44, 120, 220)',
                        borderColor: 'rgb(44, 120, 220)',
                        data: [18, 17, 4, 3, 2, 20, 25, 31, 25, 22, 20, 9]
                    },
                    {
                        label: 'Visitors',
                        backgroundColor: 'rgb(180, 200, 230)',
                        borderColor: 'rgb(180, 200, 230)',
                        data: [40, 20, 17, 9, 23, 35, 39, 30, 34, 25, 27, 17]
                    }

                    ]
                },

                // Configuration options go here
                options: {}
            });
        </script>

        @livewireScripts

        @stack('scripts')
    </body>
</html>
