<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        return view('admin.doctor.index');
    }
    public function manage_doctor(){
        return view('admin.doctor.manage_doctor');
    }
}
