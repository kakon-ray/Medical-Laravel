<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminRegistationController extends Controller{

    public function create(){
        return view('admin.auth.registation');
    }
    public function store(Request $request){

      $arrayRequest = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        "password_confirmation" => $request->password_confirmation,
    ];

    $arrayValidate  = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Admin::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
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

        $user = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
          $arr = array('status' => 200, 'msg' => 'Registation Completed');
          return \Response::json($arr);
      } else {
          $arr = array('status' => 400, 'msg' => 'Registation Faild');
          return \Response::json($arr);
      }
    }

 
    
}
