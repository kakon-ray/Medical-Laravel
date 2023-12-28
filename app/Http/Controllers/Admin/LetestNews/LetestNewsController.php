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
}
