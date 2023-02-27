<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePwdController extends Controller
{
    public function changepassword()
    {
        return view('frontend.changepassword');
    }
}
