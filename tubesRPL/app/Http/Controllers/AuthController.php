<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Balita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function index()
    {
        return view("welcome");
    }

    function loginView()
    {
        return view("login");
    }

    function registerView()
    {
        return view("register");
    }

 /*    function parentView()
    {
        return view("ortuView.parentPage",[
            "balita" => Balita::all(),
        ]);
    } */

    function forumView()
    {
        return view("ortuView.forumPage");
    }

    function articleView()
    {
        return view("ortuView.articlePage");
    }

    function hospitalView()
    {
        return view("ortuView.mapPage");
    }

/*     function notesView()
    {
        return view("ortuView.notesPage");
    } */

    function ortuProfView()
    {
        return view("ortuView.profOrtu");
    }

    function addDataBayi()
    {
        return view("ortuView.addData");
    }

    function listDokView()
    {
        return view("ortuView.listDok");
    }

    function doLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation
            'password' => 'required', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);
            // validation failed return with 422 status

        } else {
            //validations are passed try login using laravel auth attemp
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json(["status"=>true,"redirect_location"=>url("parentView")]);
            } else {
                return response()->json([["Invalid credentials"]],422);
            }
        }
    }

    function doRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'name' => 'required',
            // 'username' => 'required',
            'password' => 'required|min:8', // required and number field validation
            'confirm_password' => 'required|same:password',

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);
            // validation failed return back to form

        } else {
            //validations are passed, save new user in database
            $User = new User;
            $User->email = $request->email;
            $User->name = $request->name;
            // $User->username = $request->username;
            // $User->phonenumb = $request->phonenumb;
            $User->password = bcrypt($request->password);
            $User->save();

            return response()->json(["status"=>true,"msg"=>"You have successfully registered, Login to access your dashboard","redirect_location"=>url("login")]);

        }
    }

    // logout method to clear the sesson of logged in user
    function logout()
    {
        Auth::logout();
        return redirect("login")->with('success', 'Logout successfully');;
    }
}
