<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RsController extends Controller
{
    function editProfRS()
    {
        return view("rsView.editprofilRumahSakit");
    }
    
    function profRS()
    {
        return view("rsView.profilrumahsakit");
    }
    

}