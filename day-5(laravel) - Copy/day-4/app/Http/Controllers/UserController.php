<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')->get();
        return view('allusers', ['data'=>$users]);
    }
    public function singleUsers(string $id){
        $users = DB::table('users')->where('id',$id)->get();
        return view('user', ['data' => $users]);
    }
}
