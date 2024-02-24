<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function profile($id, $name){
        return view('UserProfileView', ['id' => $id,  'name'=> $name]);
    }
}
