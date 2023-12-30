<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!doctype html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <title>@yield('title')</title>


                @vite(['resources/css/app.css', 'resources/js/app.js'])


            

                <!-- mdn bootstrap -->
                <!-- Font Awesome -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
                    rel="stylesheet" />
        
                    <!-- Style css -->
               
                    <link rel="stylesheet" href="{{ asset('guest/css/bootstrap.css') }}">
                    <link rel="stylesheet" href="{{ asset('guest/css/animation.css') }}">
                    <link rel="stylesheet" href="{{ asset('guest/css/style.css') }}">
                    <link rel="stylesheet" href="{{ asset('guest/css/search.css') }}">
                    
                <style>
                    .swalstyle {
                        width: 300px !important;
                        height: 200px !important;
                        font-size: 10px !important;
                        line-height: 2.8 !important;
                    }
                </style>

            </head>

    <body>


        <main>


            @include('layouts.user.navigation')

            @yield('content')

            @include('layouts.user.footer')


        </main>


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
