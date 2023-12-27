<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function index(){
        return view('admin.doctor.add_doctor');
    }
    public function manage_doctor(){
        return view('admin.doctor.manage_doctor');
    }
    public function manage_doctor_submit(Request $request){
        $arrayRequest = [
            'doctor_name' => $request->doctor_name,
            'doctor_phonenumber' => $request->doctor_phonenumber,
            'doctor_image' => $request->doctor_image,
            'doctor_details' => $request->doctor_details,
        ];
    
        $arrayValidate  = [
            'doctor_name' => 'required',
            'doctor_phonenumber' => 'required|regex:/(01)[0-9]{9}/',
            'doctor_image' => 'required',
            'doctor_details' => ['required', 'string', 'max:255'],
        ];
    
        $response = Validator::make($arrayRequest, $arrayValidate);
    
        if ($response->fails()) {
            $msg = '';
            foreach ($response->getMessageBag()->toArray() as $item) {
                $msg = $item;
            };
            $arr = array('status' => 400, 'msg' => $msg);
            return \Response::json($arr);
        }
    
            $user = Doctor::create([
                'doctor_name' => $request->doctor_name,
                'doctor_phonenumber' => $request->doctor_phonenumber,
                'doctor_image' => $request->doctor_image,
                'doctor_details' => $request->doctor_details,
                
            ]);
    
            if ($user) {
              $arr = array('status' => 200, 'msg' => 'Doctor Information Submited Successfylly');
              return \Response::json($arr);
          } else {
              $arr = array('status' => 400, 'msg' => 'Doctor Information Submission Faild');
              return \Response::json($arr);
          }
        }
    
}
