<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Appointment;
use Illuminate\Support\Facades\Cookie;

class SiteController extends Controller
{
    function home(){

        return view('home');
   }

    function clinic(){

        return view('clinic');
   }

    function appointment(){

        return view('appointment');
   }

    function contact(){

        return view('contact');
   }

    function admin(){
        $all_appointment = Appointment::get();
        return view('admin.admin',['all_appointment'=>$all_appointment]);
   }

   function Registation(){
    return view('registation');
   }

   function Login(){
    return view('login');
   }


//    admin registation
   function admin_registaion(Request $request){
    $admin_name = $request->input('admin_name');
    $admin_email = $request->input('admin_email');
    $admin_password = $request->input('admin_password');


        $responce = Admin::insert([
            'name' => $admin_name,
            'email' => $admin_email,
            'password' => $admin_password,
          
        ]);
   
        if($responce == 1){
            return 1;
        }


   }

   function admin_login(Request $request){
    $admin_email_login = $request->input('admin_email_login');
    $admin_password_login = $request->input('admin_password_login');

   
    
    $responce = Admin::where('email', $admin_email_login)->where('password', $admin_password_login)->count();
    if($responce == 1){
        cookie::queue('admin',$admin_email_login, 1296000 );
         return 1;
        
     }
    


   }

   function logout(){
    cookie::queue(cookie::forget('admin'));
    return 1;
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


   function remove_appointment(Request $request){
    $id = $request->input('id');

    $responce = Appointment::where('id', $id)->delete();

     if($responce == 1){
         return 1;
     }
}

}
