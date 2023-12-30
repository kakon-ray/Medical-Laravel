<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard.index');
    }

    public function appointment(){
        $allAppointment = Appointment::all();
        return view('admin.appointment.index',compact('allAppointment'));
    }
    public function contact_manage(){
        $allContact = Contact::all();
        return view('admin.contact.index',compact('allContact'));
    }

    public function delete_appointment(Request $request){
        $appointment = Appointment::find($request->id);

        if (is_null($appointment)) {

            return response()->json([
                'msg' => "কোনো অ্যাপয়েটমেন্ট খুজে পাওয়া যায়নি",
                'status' => 404
            ], 404);
        } else {

            DB::beginTransaction();

            try {

                $appointment->delete();
                DB::commit();

                return response()->json([
                    'status' => 200,
                    'msg' => 'এই ম্যাসেজ টি ডিলিট করা হয়েছে',
                ], 200);
            } catch (\Exception $err) {

                DB::rollBack();

                return response()->json([
                    'msg' => "সার্ভার জনিত সমস্যা হয়েছে",
                    'status' => 500,
                    'err_msg' => $err->getMessage()
                ], 500);
            }
        }
    }
    public function delete_contact_manage(Request $request){
        $contact = Contact::find($request->id);

        if (is_null($contact)) {

            return response()->json([
                'msg' => "কোনো ম্যাসেজ খুজে পাওয়া যায়নি",
                'status' => 404
            ], 404);
        } else {

            DB::beginTransaction();

            try {

                $contact->delete();
                DB::commit();

                return response()->json([
                    'status' => 200,
                    'msg' => 'এই ম্যাসেজ টি ডিলিট করা হয়েছে',
                ], 200);
            } catch (\Exception $err) {

                DB::rollBack();

                return response()->json([
                    'msg' => "সার্ভার জনিত সমস্যা হয়েছে",
                    'status' => 500,
                    'err_msg' => $err->getMessage()
                ], 500);
            }
        }
    }
}
