<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ValidateUser(Request $request){
        $input = $request->all();

        return $this->sendRsponse([], "scuss");
    }
}
