<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Subport\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Image;

class RegisterController extends Controller
{
    public function register(Request $request){

        $data = array();
        $data['username'] = $request->username;
        $data['password'] = $request->password;
        $data['rest_name'] = $request->rest_name;
        $data['address'] = $request->address;
        $data['rest_key'] = $request->rest_key;

        //for upload image and resize
        $image = $request->file('image');
        $image_name = Str::random(40);
        $text = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$text;
        $data['image'] = $image_full_name;

        $destinationPath = public_path('/img/logo');
        $img = Image::make($image->path());
        $img->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$image_full_name);

        DB::table('rest_user')->insert($data);

        return response()->json(['status'=>'ok']);
    }
}
