@extends('layouts.user.master')
@section('title')
    {{ 'Appointment' }}
@endsection

@section('content')


        <!-- Start appointment Section -->

        <section class="appointment-page-contact text-light pb-5" id="appointment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="card mt-5 py-5 pb-5 px-2">
                            <h1 class="text-center">Book an appointment now</h1>
                            <div class="title-width m-auto my-4 bg-info"></div>
                            <div class="row mx-2">
                                <form action="{{ route('user.apppointment.submit') }}" method="POST" id="common_alert">
                                    @csrf
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <label> আপনার নাম লিখুন </label>
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="নাম" />
                                            <label class="mt-3"> আপনার মোবাইল নাম্বার</label>
                                            <input class="form-control"  type="phone" name="phonenumber"
                                                placeholder="01707500512" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label>ক্যাটাগরি সিলেক্ট করুন</label>
                                            <select class="form-control rounded-0" name="categorie"
                                                aria-label="Default select example">
                                                <option selected>মেডিসিন</option>
                                                <option value="সার্জারি">সার্জারি</option>
                                                <option value="অর্থপেডিক্স">অর্থপেডিক্স</option>
                                                <option value="গাইনি">গাইনি</option>
                                            </select>
                                            <label class="mt-3">ডাক্তার ভিজিট এর তারিখ সিলেক্ট করুন</label>
                                            <input class="form-control" type="date" name="date_of_birth" />
                                        </div>
                                     
                                    </div>

                                    <button type="submit" class="submit_button">
                                        সাবমিট
                                    </button>
                                </form>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Footer Sectin -->
@endsection
