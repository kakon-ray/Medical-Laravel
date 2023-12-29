<?php

namespace App\Http\Controllers\User\UserGuest;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserGuestController extends Controller
{
    function home(){

        return view('user.guest.home');
   }

    function clinic(){

        return view('user.guest.clinic');
   }

    function appointment(){

        return view('user.guest.appointment');
   }

    function contact(){

        return view('user.guest.contact');
   }

    function admin(){
        $all_appointment = Appointment::get();
        return view('admin.admin',['all_appointment'=>$all_appointment]);
   }
    function doctor(){
        $doctor = Doctor::get();
        return view('user.guest.our_doctor',compact('doctor'));
   }
    function services(){
        $services = Services::get();
        return view('user.guest.services',compact('services'));
   }





   function apppointment_submit(Request $request){
    $arrayRequest = [
        'phonenumber' => $request->phonenumber,
    ];

    $arrayValidate  = [
        'phonenumber' => 'required|regex:/(01)[0-9]{9}/'
    ];

    $response = Validator::make($arrayRequest, $arrayValidate);

    if ($response->fails()) {
        $msg = '';
        foreach ($response->getMessageBag()->toArray() as $item) {
            $msg = $item;
        };

        return response()->json([
            'status' => 400,
            'msg' => $msg
        ], 200);
    } else {
        DB::beginTransaction();

        try {

            $appointment = Appointment::create([
                'name' => $request->name,
                'categorie' => $request->categorie,
                'phonenumber' => $request->phonenumber,
                'date_of_birth' => $request->date_of_birth,

            ]);

            DB::commit();
        } catch (\Exception $err) {
            $appointment = null;
        }

        if ($appointment != null) {
            return response()->json([
                'status' => 200,
                'msg' => 'আপনার সেবা টি নিশ্চিত করা হয়েছে'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'msg' => 'সার্ভারজনিত সমস্যা হয়েছে',
                'err_msg' => $err->getMessage()
            ]);
        }
    }
   }
















}
