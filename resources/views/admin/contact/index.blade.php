@extends('layouts.admin.master')
@section('title')
    {{ 'Manage Doctor | Laravel Auth ' }}
@endsection

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.admin.navigation')



                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-center py-2">
                            <h2>ম্যনেজ  <span class="text-primary">নটিফিকেশন</span></h2>
                        </div>
                        <div class="col-lg-12 table-responsive">
                            <table id="VisitorDt" class="table table-bordered dataTable" cellspacing="0" width="100%">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th class="th-sm">নাম</th>
                                        <th class="th-sm">মোবাইল নাম্বার</th>
                                        <th class="th-sm">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allContact as $item)
                                        <tr class="text-center">
                                            <td class="th-sm">{{ $item->name }}</td>
                                            <td class="th-sm">{{ $item->phonenumber }}</td>
            
                                            <td class="th-sm">

                                                    <button type="button" onclick="delete_contact({!! $item->id !!})"
                                                        class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>


    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
    </div>


        <script>
            const delete_contact = (id) => {
                Swal.fire({
                    customClass: 'swalstyle',
                    title: 'Are you sure?',
                    text: "Delete this Item",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios
                            .get("/dashboard/contact/delete", {
                                params: {
                                    id: id
                                }
                            })
                            .then(function(response) {
    
                                if (response.data.status == 200) {
                                    Swal.fire({
                                        customClass: 'swalstyle',
                                        position: 'top-center',
                                        icon: 'success',
                                        title: response.data.msg,
                                        text:'Thanks',
                                        showConfirmButton: false,
                                        timer: 1500
    
                                    })
                                    setTimeout(function() {
                                        location.reload();
                                    }, 1500);
    
    
                                } else {
                                    Swal.fire({
                                        customClass: 'swalstyle',
                                        position: 'top-center',
                                        icon: 'error',
                                        title: response.data.msg,
                                        text: response.data.err_msg,
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                }
    
    
                            })
                            .catch(function(error) {
                                Swal.fire({
                                    customClass: 'swalstyle',
                                        position: 'top-center',
                                        icon: 'error',
                                        title: error.message,
                                        showConfirmButton: false,
                                        timer: 1500
                                });
                            });
                    }
                })
    
    
    
            }
        </script>
    @endsection
