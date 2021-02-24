<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Subport\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ResController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
     //api for mobile app =======================================
     public function index(Request $request)
     {
        header("x-api-key: 12345");
        $token = $request->header("x-api-key: 12345");


         $data = DB::table('rest_menu')
               ->join('category_menu','rest_menu.category_id','=','category_menu.id')
               ->where('rest_menu.rest_id',1)
               ->get();

         return [
            'data' => $data,
        ];

        //   return [
        //     'data' => $token,
        // ];

     
     }

     public function categoryByRest()
     {
         $data = DB::table('category_menu')
                 ->get();
         return response()->json($data);
     }

//api for mobile app ============ End ===========================

    public function menuWeb()
    {
        $data = DB::table('rest_menu')
                ->get();
        return response()->json($data);
    }

    public function restUsers()
    {
        $data = DB::table('rest_user')
                ->get();
        return response()->json($data);
    }

    public function category()
    {
        $data = DB::table('category_menu')
                ->get();
        return response()->json($data);
    }

    public function addCategory(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['rest_id'] = $request->rest_id;
          DB::table('category_menu')
                ->insert($data);
                return response()->json(['status'=>'ok']);
    }

    public function menuByCate(Request $request)
    {
        $data = DB::table('rest_menu')
                ->where('category_id',$request->id)
                ->get();
        return response()->json($data);
    
    }

}
