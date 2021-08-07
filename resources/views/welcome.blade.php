<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TKD CRM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <svg class="w-64 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 213.35 14.26">
                            <defs/>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="cls-1" d="M0 .08h11.86v3H7.71v10.83H4.1V3.06H0zM20.51 10.3a2.62 2.62 0 002 .79 2.44 2.44 0 001.88-.78 3 3 0 00.72-2.1V.08h3.61v8.13a6.28 6.28 0 01-.76 3.15 5.19 5.19 0 01-2.17 2.08 7 7 0 01-3.3.73 7.17 7.17 0 01-3.33-.73 5.29 5.29 0 01-2.21-2.08 6.18 6.18 0 01-.78-3.15V.08h3.61v8.13a2.86 2.86 0 00.73 2.09zM41.17 13.91l-2-3.82h-2.7v3.82h-3.61V.08h6.22a6.42 6.42 0 014.25 1.28 4.43 4.43 0 011.51 3.58 5.46 5.46 0 01-.63 2.69 4.49 4.49 0 01-1.84 1.77l2.88 4.51zm-4.7-6.7h2.63a2.42 2.42 0 001.7-.56 2 2 0 00.6-1.59 2 2 0 00-.6-1.55A2.46 2.46 0 0039.1 3h-2.63zM58.31.08h3.36v13.83h-3.16l-6.27-8.26v8.26h-3.38V.08H52l6.29 8.33zM79.38 13.91h-4.32l-3.63-5.36-1.73 1.93v3.43h-3.61V.08h3.61v6l5.18-6h4.19l-5.13 5.71zM82.58.08h10.91V3h-7.3v2.55h6.59v2.86h-6.59V11h7.49v2.88h-11.1zM110.75.08l-5 9.41v4.42h-3.61V9.59L97.06.08h3.61L104 6l3.14-5.92zM131.56 1.08a6.37 6.37 0 012.58 2.43 6.88 6.88 0 01.93 3.59 6.86 6.86 0 01-.94 3.6 6.25 6.25 0 01-2.63 2.43 8.49 8.49 0 01-3.91.87h-5.8V.22h5.94a8.16 8.16 0 013.83.86zm-1.88 9.52a3.3 3.3 0 001.26-1.4 4.56 4.56 0 00.45-2.06 4.41 4.41 0 00-.48-2.09 3.52 3.52 0 00-1.33-1.4 3.66 3.66 0 00-1.93-.5h-2.26v7.94h2.44a3.46 3.46 0 001.85-.49zM138.75.22h3.59V14h-3.59zM155.59 7h3.1v5.49a9.18 9.18 0 01-2.7 1.31 10.32 10.32 0 01-3 .5 7.52 7.52 0 01-3.76-.94 6.87 6.87 0 01-2.65-2.56 7.09 7.09 0 01-1-3.66 6.82 6.82 0 011-3.63A7 7 0 01149.3.92a8.24 8.24 0 013.89-.92 8.93 8.93 0 013.06.56 8 8 0 012.6 1.5l-2 2.52a5.92 5.92 0 00-1.73-1.12 4.9 4.9 0 00-1.91-.41 3.73 3.73 0 00-2 .53A3.9 3.9 0 00149.78 5a4.23 4.23 0 00-.51 2.07 4.28 4.28 0 00.51 2.09 3.86 3.86 0 001.42 1.47 3.92 3.92 0 002 .53 5.44 5.44 0 002.38-.67zM163 .22h3.6V14H163zM169.92.22h11.82v3h-4.13V14H174V3.19h-4.09zM194.18 14l-.94-2.44h-6l-1 2.44h-3.7l6-13.78h3.7L198 14zm-5.81-5.19h3.81l-1.89-4.92zM201.15.22h3.6v10.71h5.84V14h-9.44zM209.69.19h1.43v.27h-.56V2h-.31V.46h-.56zm1.71 0h.36l.61 1.25.63-1.25h.37V2h-.29V.63l-.59 1.22h-.2l-.61-1.22V2h-.28z"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
