<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function ShowAdmArea()
    {
        return view('internal_views.admin_views.vw_adm_area');
    }
}
