@extends('layouts.admin.master')
@section('title')
    {{ 'Dashboard | Laravel Auth ' }}
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
                            <h2>নতুন <span class="text-primary">ডাক্তার  </span>যুক্ত করুন</h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="card m-0 p-4">
                                <form method="POST" action="{{ route('dashboard.doctor.submit') }}" id="common_alert"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="my-4">
                                        <label>ডাক্তার এর নাম লিখুন</label>
                                        <input required type="text" class="form-control" name="doctor_name"
                                            placeholder="ডা: পৃতিশ তরফদার">
                                    </div>

                                    <div class="my-4">
                                        <label>বিশেষজ্ঞ</label>
                                        <input required type="text" class="form-control" name="doctor_specialist"
                                            placeholder="মেডিসিন">
                                    </div>

                                    <div class="my-4">
                                        <label>ডাক্তার এর মোবাইল নাম্বার লিখুন</label>
                                        <input required type="text" class="form-control" name="doctor_phonenumber"
                                            placeholder="01707500512">
                                    </div>

                                    <div class="my-4">
                                        <label>ডাক্তার এর বিস্তারিত বর্ননা করুন</label>
                                        <textarea class="form-control" id="ck_editor" row="10" name="doctor_details"></textarea>
                                    </div>

                                    <div class="my-4">
                                        <label class="form-label">ডাক্তার এর ছবি যুক্ত করুন</label>
                                        <input name="doctor_image" type="file" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>


                                </form>
                            </div>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
@endsection
