<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medical Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


       <!-- Style css -->
       <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

       <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
       <link href="{{ asset('admin/css/sb-admin-2.css') }}" rel="stylesheet">

       <style>
        .swalstyle {
            width: 300px !important;
            height: 220px !important;
            font-size: 10px !important;
        }
    </style>

</head>

<body id="page-top">

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

            <!-- Page Content -->
            <main>
                

                @yield('content')
                
             
                
            </main>
        </div>
        
       <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
    
    <script src="{{ asset('guest/js/custom.js') }}"></script>
    <script src="{{ asset('admin/js/ajax_alert.js') }}"></script>
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>



    <script>
        var desc;
        ClassicEditor
            .create(document.querySelector('#ck_editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('admin.image.upload') . '?_token=' . csrf_token() }}',
                }
            })
            .then(editor => {
                console.log(editor)
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>