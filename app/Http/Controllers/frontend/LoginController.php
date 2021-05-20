<?php
namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;



class LoginController extends Controller
{
    public function login()
    {
        return view("admin.login.loginform");
    }
    public function admindashboard(Request $request)
{
      $user=User::whereEmail($request->email)->where('Isadmin',1)->first();



        if(!empty($user)){
            if(Hash::check($request->password,$user->password))
            {

                session(['admin'=>$user]);
                return \redirect(route('admin-dashboard'));
            }
            else{
                // return redirect()->back()->withInput();
                // dd(redirect()->back()->withError('invalid email or password given'));
                return redirect()->back()->withError('invalid email or password given');
            }


        }else
                 {
                    return redirect()->back()->withError('invalid email or password given');

                 }
}
}
