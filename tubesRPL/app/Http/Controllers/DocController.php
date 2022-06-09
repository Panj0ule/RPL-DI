<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DocController extends Controller
{
    function index()
    {
        return view("doctorView.homedoctor");
    }
    
    function profView()
    {
        return view("doctorView.profilDoctor");
    }

    function setView()
    {
        return view("docView.settingdoctor");
    }

    function editProf()
    {
        return view("docView.editprofileDoctor");
    }

    function articleDoc()
    {
        return view("docView.articledoctor");
    }

}