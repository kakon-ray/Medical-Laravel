<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>


        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Style css -->
        <link rel="stylesheet" href="{{ asset('guest/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('guest/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('guest/css/animation.css') }}">

        <!-- mdn bootstrap -->
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

        <style>
            .swalstyle {
                width: 300px !important;
                height: 220px !important;
                font-size: 10px !important;
            }
        </style>

    </head>

    <body>
        <div id="app">

            <main>


                @yield('content')


            </main>
        </div>

        <!-- ckeditor use in blog description -->
        <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('summary-ckeditor');
        </script>



        <script src="{{ asset('guest/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('guest/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('guest/js/custom.js') }}"></script>
        <script src="{{ asset('admin/js/ajax_alert.js') }}"></script>
        <!-- sweetalert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

    </body>

</html>
