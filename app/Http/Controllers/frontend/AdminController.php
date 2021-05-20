<?php
namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Sitesetting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboardpage');
    }
    public function logout(){
        session()->forget('admin');
        return Redirect::route('admin')->with(['msg_type' => 'success', 'msg' => 'Logout Successfully']);
    }
    public function aboutus()
    {
        dd("aboutus");
    }
    public function  userprofile(Request $request){

        return view('admin.userprofile.profile');
        }
        public function  sitesetting(Request $request){
            $data['data']=Sitesetting::all();
            return view('admin.sitesetting.sitesettingpage',$data);
            }
            public function home(Request $request){

                return view('admin.home.homepage');
                }

                public function  submitsitesetting(Request $request){
                    $Sitesetting = [
                    'site_title'=>$request->site_title,
                    'email'	=>$request->email,
                    'phone'=>$request->phone_number,
                    'address'=>$request->address,
                    'copyrighttext'=>$request->copyrighttext,
                    'footertext'=>$request->footertext,
                    ];

                    if($request->hasFile('header_logo')){
                    $path = $request->file('header_logo');
                    $path = $request->header_logo->store('public/media');
                    $path1 = basename($path);
                    $Sitesetting['header_logo']= $path1;
                    }
                    if($request->hasFile('footer_logo')){
                    $path = $request->file('footer_logo');
                    $path = $request->footer_logo->store('public/media');
                    $path2 = basename($path);
                    $Sitesetting['footer_logo'] = $path2;
                    }
                    if($request->hasFile('fav_icon')){
                    $path = $request->file('fav_icon');
                    $path = $request->fav_icon->store('public/media');
                    $path3 = basename($path);
                    $Sitesetting['fav_icon'] = $path3;
                    }
                    dd($Sitesetting);
                    if($request->id)
                    {
                    Sitesetting::where('id',$request->id)->update($Sitesetting);
                    }
                    //dd($request->id);
                    else{
                    Sitesetting::where('id',$request->id)->insert($Sitesetting);
                    }
                    //   dd($Homepage);
                    return redirect()->route('site-setting')->withSuccess('Great! Data successfully update with validation.');
                    }
}
