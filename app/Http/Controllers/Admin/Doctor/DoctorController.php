<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function index()
    {
        return view('admin.doctor.add_doctor');
    }
    public function manage_doctor()
    {
        $allDoctor = Doctor::all();
        return view('admin.doctor.manage_doctor', compact('allDoctor'));
    }
    public function update_doctor(Request $request)
    {
        $doctor = Doctor::find($request->id);
        return view('admin.doctor.update_doctor', compact('doctor'));
    }
    public function doctor_submit(Request $request)
    {
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
            'doctor_details' => ['required', 'string', 'max:500'],
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

                $img = $request->doctor_image;
                $doctor_image =  $img->store('/public/doctor_image');
                $doctor_image = (explode('/', $doctor_image))[2];
                $host = $_SERVER['HTTP_HOST'];
                $doctor_image = "http://" . $host . "/storage/doctor_image/" . $doctor_image;

                $doctor = Doctor::create([
                    'doctor_name' => $request->doctor_name,
                    'doctor_phonenumber' => $request->doctor_phonenumber,
                    'doctor_image' => $doctor_image,
                    'doctor_details' => $request->doctor_details,

                ]);

                DB::commit();
            } catch (\Exception $err) {
                $doctor = null;
            }

            if ($doctor != null) {
                return response()->json([
                    'status' => 200,
                    'msg' => 'Doctor Information Submited Successfylly'
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
    public function doctor_update(Request $request)
    {
        $doctor = Doctor::find($request->id);

        if (is_null($doctor)) {
            return response()->json([
                'msg' => "Doctor dosen't exists",
                'status' => 404
            ], 404);
        } else {
            $arrayRequest = [
                'doctor_name' => $request->doctor_name,
                'doctor_phonenumber' => $request->doctor_phonenumber,
                'doctor_details' => $request->doctor_details,
            ];

            $arrayValidate  = [
                'doctor_name' => 'required',
                'doctor_phonenumber' => 'required|regex:/(01)[0-9]{9}/',
                'doctor_details' => ['required', 'string', 'max:500'],
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

                    if ($request->doctor_image) {
                        $img = $request->doctor_image;
                        $doctor_image =  $img->store('/public/doctor_image');
                        $doctor_image = (explode('/', $doctor_image))[2];
                        $host = $_SERVER['HTTP_HOST'];
                        $doctor_image = "http://" . $host . "/storage/doctor_image/" . $doctor_image;
                    } else {
                        $doctor_image = $request->old_image;
                    }


                    $doctor->doctor_name = $request->doctor_name;
                    $doctor->doctor_phonenumber = $request->doctor_phonenumber;
                    $doctor->doctor_image = $doctor_image;
                    $doctor->doctor_details = $request->doctor_details;
                    $doctor->save();
                    DB::commit();


                } catch (\Exception $err) {
                    DB::rollBack();
                    $doctor = null;
                }

                if (is_null($doctor)) {
                    return response()->json([
                        'status' => 500,
                        'msg' => 'Internal Server Error',
                        'err_msg' => $err->getMessage()
                    ]);
                } else {
                    return response()->json([
                        'status' => 200,
                        'msg' => 'Doctor Information Update Successfylly'
                    ]);
                }
            }
        }
    }
    public function delete_doctor(Request $request)
    {
        $doctor = Doctor::find($request->id);

        if (is_null($doctor)) {

            return response()->json([
                'msg' => "Doctor dosen't exists",
                'status' => 404
            ], 404);
        } else {

            DB::beginTransaction();

            try {

                $doctor->delete();
                DB::commit();

                return response()->json([
                    'status' => 200,
                    'msg' => 'Doctor Delete Successfully',
                ], 200);
            } catch (\Exception $err) {

                DB::rollBack();

                return response()->json([
                    'msg' => "Internal Server Error",
                    'status' => 500,
                    'err_msg' => $err->getMessage()
                ], 500);
            }
        }
    }
}
