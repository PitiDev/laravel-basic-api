<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
            ->get();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = array();
        $password = Hash::make($request->password);
        $data['username'] = $request->username;
        $data['password'] = $password;

        $user_add = DB::table('users')->insert($data);

        return response()->json(['status'=>$user_add]);

    }

    public function login(Request $request)
    {

        $username = $request->username;
        $password = $request->password;

        $data_user = DB::table('users')
                    ->where('username', $username)
                    ->first();
        
        $check_password = Hash::check($password, $data_user->password);

        if($check_password == true){
            return response()->json(['status'=>'success',$data_user->username]);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = array();
        $id = $request->id;
        $data['username'] = $request->username;
        $password = Hash::make($request->password);
        $data['password'] = $password;

        $data_update = DB::table('users')
                        ->where('id', $id)
                        ->update($data);

        return response()->json(['status'=>'success', $data_update]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;

        DB::table('users')
            ->where('id', $id)
            ->delete();

        return response()->json(['status'=>'success',]);
    }
}
