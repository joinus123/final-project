<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{
    public function  login(Request $request){
        dd('dddf');
        //return view('admin.login.loginform');
}

}

