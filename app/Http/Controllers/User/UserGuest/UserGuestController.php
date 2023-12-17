<?php

namespace App\Http\Controllers\User\UserGuest;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

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





   function add_apppointment(Request $request){
    $name = $request->name;
    $phonenumber = $request->phonenumber;
    $date = $request->date;
    $category = $request->category;
    

    $responce = Appointment::insert([
        'name' => $name,
        'categorie' => $category,
        'phonenumber' => $phonenumber,
        'date_of_birth' => $date,
 
    ]);



    if($responce == 1){
        return 1;
    }
   }
}
