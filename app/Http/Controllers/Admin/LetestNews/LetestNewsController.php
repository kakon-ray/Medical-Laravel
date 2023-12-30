<?php

namespace App\Http\Controllers\Admin\LetestNews;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\LetestNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LetestNewsController extends Controller
{
    public function index()
    {
        $allNews = LetestNews::all();
        return view('admin.news.manage_news',compact('allNews'));
    }

    public function add()
    {
        return view('admin.news.add_news');
    }

    public function add_submit(Request $request)
    {
        $arrayRequest = [
            'title' => $request->title,
            'date' => $request->date,
            'image' => $request->image,
            'details' => $request->details,
        ];

        $arrayValidate  = [
            'title' => 'required',
            'date' => 'required',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'details' => ['required','max:200'],
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

                $img = $request->image;
                $image =  $img->store('/public/doctor_image');
                $image = (explode('/', $image))[2];
                $host = $_SERVER['HTTP_HOST'];
                $image = "http://" . $host . "/storage/doctor_image/" . $image;

                $news = LetestNews::create([
                    'title' => $request->title,
                    'date' => $request->date,
                    'image' => $image,
                    'details' => $request->details,

                ]);

                DB::commit();
            } catch (\Exception $err) {
                $news = null;
            }

            if ($news != null) {
                return response()->json([
                    'status' => 200,
                    'msg' => 'News Submited Successfylly'
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

    public function update_doctor(Request $request)
    {
        $letestNews = LetestNews::find($request->id);
        return view('admin.news.update_news',compact('letestNews'));

    }
    public function news_update_submit(Request $request)
    {
        $letestNews = LetestNews::find($request->id);

        if (is_null($letestNews)) {
            return response()->json([
                'msg' => "Letest News dosen't exists",
                'status' => 404
            ], 404);
        } else {
            if($request->image){
                $arrayRequest = [
                    'title' => $request->title,
                    'date' => $request->date,
                    'image' => $request->image,
                    'details' => $request->details,
                ];
        
                $arrayValidate  = [
                    'title' => 'required',
                    'date' => 'required',
                    'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                    'details' => ['required', 'string', 'max:500'],
                ];
            }else{
                $arrayRequest = [
                    'title' => $request->title,
                    'date' => $request->date,
                    'details' => $request->details,
                ];
        
                $arrayValidate  = [
                    'title' => 'required',
                    'date' => 'required',
                    'details' => ['required', 'string', 'max:500'],
                ];
            }


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

                    if ($request->image) {
                        $img = $request->image;
                        $image =  $img->store('/public/doctor_image');
                        $image = (explode('/', $image))[2];
                        $host = $_SERVER['HTTP_HOST'];
                        $image = "http://" . $host . "/storage/doctor_image/" . $image;

                    } else {
                        $image = $request->old_image;
                    }


                    $letestNews->title = $request->title;
                    $letestNews->date = $request->date;
                    $letestNews->image = $image;
                    $letestNews->details = $request->details;
                    $letestNews->save();
                    DB::commit();


                } catch (\Exception $err) {
                    DB::rollBack();
                    $letestNews = null;
                }

                if (is_null($letestNews)) {
                    return response()->json([
                        'status' => 500,
                        'msg' => 'Internal Server Error',
                        'err_msg' => $err->getMessage()
                    ]);
                } else {
                    return response()->json([
                        'status' => 200,
                        'msg' => 'letestNews Information Update Successfylly'
                    ]);
                }
            }
        }

    }

    public function delete_news(Request $request)
    {
        $doctor = LetestNews::find($request->id);

        if (is_null($doctor)) {

            return response()->json([
                'msg' => "কোনো নিউজ খুজে পাওয়া যায়নি",
                'status' => 404
            ], 404);
        } else {

            DB::beginTransaction();

            try {

                $doctor->delete();
                DB::commit();

                return response()->json([
                    'status' => 200,
                    'msg' => 'এই নিউজ ডিলিট করা হয়েছে',
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
