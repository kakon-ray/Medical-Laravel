<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function index(){
        $allServices = Services::all();
        return view('admin.services.manage_services',compact('allServices'));
    }
    public function add(){
        return view('admin.services.add_services');
    }
    public function update_services(Request $request){
        $servicesDetails = Services::find($request->id);
        return view('admin.services.update_services',compact('servicesDetails'));
    }
    public function add_submit_services(Request $request){
        $arrayRequest = [
            'title' => $request->title,
            'details' => $request->details,
        ];

        $arrayValidate  = [
            'title' => 'required',
            'details' => ['required', 'string', 'max:500'],
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

                $services = Services::create([
                    'title' => $request->title,
                    'details' => $request->details,

                ]);

                DB::commit();
            } catch (\Exception $err) {
                $services = null;
            }

            if ($services != null) {
                return response()->json([
                    'status' => 200,
                    'msg' => 'Services Submited Successfylly'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'msg' => 'Internal Server Error',
                    'err_msg' => $err->getMessage()
                ]);
            }
        }
    }

    public function services_update_submit(Request $request){
        $services = Services::find($request->id);

        if (is_null($services)) {
            return response()->json([
                'msg' => "Services dosen't exists",
                'status' => 404
            ], 404);
        } else {
           
            $arrayRequest = [
                'title' => $request->title,
                'details' => $request->details,
            ];
    
            $arrayValidate  = [
                'title' => 'required',
                'details' => ['required', 'string', 'max:500'],
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

                    $services->title = $request->title;
                    $services->details = $request->details;

                    $services->save();
                    DB::commit();

                } catch (\Exception $err) {
                    DB::rollBack();
                    $services = null;
                }

                if (is_null($services)) {
                    return response()->json([
                        'status' => 500,
                        'msg' => 'Internal Server Error',
                        'err_msg' => $err->getMessage()
                    ]);
                } else {
                    return response()->json([
                        'status' => 200,
                        'msg' => 'Services Update Successfylly'
                    ]);
                }
            }
        }
    }
}
