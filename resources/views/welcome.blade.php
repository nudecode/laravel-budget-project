<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

         <!-- Fontawesome -->
         <script
         src="https://kit.fontawesome.com/1e6705f353.js"
         crossorigin="anonymous"
     ></script>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     {{-- <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}"> --}}
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
<body>
    <div class="container-fluid fixed-top p-4">
        <svg data-v-423bf9ae="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 651 192" class="my-4 iconLeft" style="width: 271px">
            <g data-v-423bf9ae="" id="9cd9a904-9a4f-437f-96ed-82961e252674" fill="#7DE38D" transform="matrix(4.1522489157152584,0,0,4.1522489157152584,80.88877748815196,13.505191642246295)">
                <path d="M8.20 2.31C7.46 0.80 5.88 0.36 4.35 0.36C2.55 0.38 0.56 1.20 0.56 3.22C0.56 5.42 2.41 5.95 4.41 6.19C5.71 6.33 6.68 6.71 6.68 7.63C6.68 8.69 5.59 9.10 4.42 9.10C3.23 9.10 2.10 8.62 1.67 7.55L0.13 8.34C0.85 10.14 2.39 10.75 4.40 10.75C6.58 10.75 8.51 9.81 8.51 7.63C8.51 5.29 6.61 4.76 4.56 4.51C3.39 4.37 2.38 4.13 2.38 3.28C2.38 2.55 3.04 1.97 4.41 1.97C5.47 1.97 6.40 2.51 6.73 3.07ZM11.52 3.57L11.52 10.50L9.81 10.50L9.81 3.57ZM9.66 1.65C9.66 2.98 11.68 2.98 11.68 1.65C11.68 0.32 9.66 0.32 9.66 1.65ZM19.36 10.50L19.36 6.80C19.36 5.89 19.94 5.10 20.86 5.10C21.78 5.10 22.16 5.87 22.16 6.78L22.16 10.50L23.87 10.50L23.87 6.78C23.87 4.70 22.90 3.50 20.94 3.50C20.05 3.50 19.25 3.78 18.63 4.76C18.24 3.81 17.42 3.47 16.59 3.47C15.93 3.47 15.13 3.72 14.77 4.42L14.64 3.58L13.06 3.58L13.06 10.50L14.77 10.50L14.77 6.80C14.77 5.89 15.32 5.07 16.24 5.07C17.18 5.07 17.65 5.89 17.65 6.80L17.65 10.50ZM29.29 9.02C28.13 9.02 27.33 8.13 27.33 7.06C27.33 5.98 28.06 5.10 29.29 5.10C30.52 5.10 31.25 5.98 31.25 7.06C31.25 8.13 30.45 9.02 29.29 9.02ZM27.17 13.38L27.17 9.69C27.66 10.44 28.74 10.67 29.47 10.67C31.68 10.67 32.96 9.07 32.96 7.06C32.96 5.03 31.54 3.44 29.41 3.44C28.63 3.44 27.71 3.78 27.17 4.55L27.06 3.60L25.47 3.60L25.47 13.38ZM34.22 0.71L34.22 10.50L35.91 10.50L35.91 0.71ZM44.25 7.66C44.52 4.82 43.08 3.39 40.77 3.39C38.53 3.39 37.10 4.90 37.10 7C37.10 9.21 38.51 10.68 40.89 10.68C41.94 10.68 43.13 10.32 43.86 9.56L42.77 8.48C42.38 8.89 41.55 9.13 40.92 9.13C39.72 9.13 38.98 8.51 38.86 7.66ZM38.89 6.24C39.14 5.35 39.90 4.90 40.82 4.90C41.80 4.90 42.50 5.35 42.62 6.24ZM50.29 6.26L53.12 6.26C53.87 6.26 54.95 6.72 54.95 7.60C54.95 8.53 53.87 8.78 53.12 8.78L50.29 8.78ZM50.29 2.38L53.12 2.38C54.29 2.38 54.66 3.14 54.66 3.58C54.66 4.14 54.28 4.63 53.12 4.63L50.29 4.63ZM53.12 0.70C51.56 0.70 50.01 0.70 48.47 0.70L48.47 10.50C50.02 10.50 51.56 10.50 53.12 10.50C55.15 10.50 56.78 9.80 56.78 7.62C56.78 7 56.36 5.78 55.22 5.43C56.13 5.03 56.49 4.30 56.49 3.54C56.49 1.57 55.05 0.70 53.12 0.70ZM58.00 3.60L58.00 7.22C58.00 9.37 59.21 10.61 60.86 10.61C61.82 10.61 62.48 10.28 63.20 9.58L63.31 10.51L64.83 10.51L64.83 3.60L63.14 3.60L63.14 7.13C63.14 8.18 62.43 9.06 61.38 9.06C60.28 9.06 59.71 8.26 59.71 7.21L59.71 3.60ZM69.69 5.03C70.77 5.03 71.69 5.84 71.69 7.04C71.69 8.29 70.77 9.07 69.69 9.07C68.60 9.07 67.73 8.25 67.73 7.04C67.73 5.80 68.60 5.03 69.69 5.03ZM71.81 0.71L71.81 4.54C71.40 3.82 70.27 3.43 69.54 3.43C67.52 3.43 66.02 4.66 66.02 7.04C66.02 9.31 67.55 10.65 69.58 10.65C70.42 10.65 71.27 10.37 71.81 9.55L71.92 10.50L73.51 10.50L73.51 0.71ZM79.73 3.77C79.25 3.44 78.69 3.37 78.15 3.37C76.22 3.37 74.65 4.72 74.65 6.87C74.65 9.03 75.99 10.35 78.15 10.35C79.00 10.35 79.90 10.78 79.90 11.73C79.90 12.68 79.13 13.22 78.15 13.22C77.17 13.22 76.34 12.63 76.34 11.73L74.65 11.73C74.65 13.59 76.15 14.81 78.15 14.81C80.15 14.81 81.61 13.64 81.61 11.73C81.61 10.85 81.33 10.02 80.18 9.45C81.31 8.93 81.63 7.73 81.63 6.87C81.63 6.12 81.44 5.43 80.91 4.83L81.68 3.85L80.42 2.90ZM78.15 4.93C79.13 4.93 79.94 5.68 79.94 6.87C79.94 8.06 79.13 8.79 78.15 8.79C77.15 8.79 76.34 8.08 76.34 6.87C76.34 5.67 77.15 4.93 78.15 4.93ZM89.57 7.66C89.84 4.82 88.40 3.39 86.09 3.39C83.85 3.39 82.42 4.90 82.42 7C82.42 9.21 83.83 10.68 86.21 10.68C87.26 10.68 88.45 10.32 89.18 9.56L88.09 8.48C87.70 8.89 86.87 9.13 86.24 9.13C85.04 9.13 84.29 8.51 84.18 7.66ZM84.21 6.24C84.46 5.35 85.22 4.90 86.14 4.90C87.12 4.90 87.82 5.35 87.93 6.24ZM91.59 1.83L91.59 3.61L90.30 3.61L90.30 5.08L91.59 5.08L91.59 8.06C91.59 9.79 92.57 10.64 94.07 10.58C94.58 10.57 94.99 10.49 95.48 10.29L95.00 8.83C94.75 8.96 94.44 9.04 94.18 9.04C93.65 9.04 93.28 8.72 93.28 8.06L93.28 5.08L95.20 5.08L95.20 3.61L93.30 3.61L93.30 1.65Z"></path>
            </g>
            <g data-v-423bf9ae="" id="d2f763a3-0e26-44f2-b590-e4db2ac37b3d" transform="matrix(1.4285714285714286,0,0,1.4285714285714286,0.2857142857142847,0)" stroke="none" fill="#7DE38D"><defs><style></style></defs>
                <path d="M9.5 0C4.359 0 .198 4.087.031 9.188A1.61 1.61 0 0 0 0 9.5v44A9.5 9.5 0 0 0 9.5 63h24a9.5 9.5 0 0 0 9.5-9.5v-44a1.61 1.61 0 0 0-.031-.313C42.802 4.088 38.64 0 33.5 0h-24zm0 3h24c3.073 0 5.634 2.135 6.313 5H3.187c.679-2.865 3.24-5 6.313-5zm12.594.875a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM3 11h37v39H3V11zm0 42h37v.5a6.5 6.5 0 0 1-6.5 6.5h-24A6.5 6.5 0 0 1 3 53.5V53zm16.563 2a1.5 1.5 0 0 0 0 3h5a1.5 1.5 0 0 0 0-3h-5z"></path>
            </g>
        </svg>
        {{-- <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div> --}}
    </div>

    <div class="container-fluid my-5 pt-5 px-5">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9">

                <div class="px-4 py-5 my-5 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/img/welcome2.png" alt="" width="200" height="250">
                    <h1 class="display-5 fw-bold text-success">Simple Budget</h1>
                    <div class="col-lg-6 mx-auto">
                      <p class="lead mb-4 text-muted">Quickly create a budget on the run.</p>
                      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('transactions') }}" class="btn btn-success btn-lg px-4 gap-3">Add Transaction</a>
                                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-lg px-4">Dashboard</a>
                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-white btn btn-success btn-lg px-4 gap-3">Register</a>
                                    <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg px-4">Login</a>
                                @endif
                            @endif
                        @endif
                      </div>
                    </div>
                  </div>


                <div class="d-flex justify-content-between mt-3">
                    <div class="text-sm text-muted">
                        <div class="flex align-content-center">

                        </div>
                    </div>

                    <div class="text-sm text-muted">
                        Simple Budget v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
