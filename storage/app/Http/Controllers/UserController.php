<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowFormLogin()
    {
        return view('forms.vw_formlogin');
    }
    public function ShowRegisterForm()
    {
        return view('forms.vw_register_form');
    }
}
