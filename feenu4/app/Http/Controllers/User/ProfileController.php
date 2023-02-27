<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile()
    {
    return view('frontend.profile');
    }
    public function editprofile()
    {
    return view('frontend.editprofile');
    }
}
