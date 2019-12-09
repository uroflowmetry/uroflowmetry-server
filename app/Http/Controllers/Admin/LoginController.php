<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NormalUsers, App\Users, App\Units;
use App\Normaluser_career;
use App\Results;
use Illuminate\Support\Facades\Hash;
use Datetime;

class LoginController extends Controller
{
    // normal user login
    public function userlogin(Request $request){
        $userId = $request -> input('username');
        $pwd = $request -> input('password');
        $ex_user = DB :: table('tbl_users')->where('userId', $userId) -> get();
        if ($ex_user -> isEmpty()){
            return back()->with('error', 'Your username is wrong, please again.');
        }
         if (Hash::check($pwd, $ex_user[0]->password)){
            $request -> session() -> put('userId', $ex_user[0]->userId);
            $request -> session() -> put('is_admin', $ex_user[0]->is_admin);
            $request -> session() -> put('avatar', $ex_user[0]->avatar);
            $request -> session() -> put('userid', $ex_user[0]->id);
            $id = $request -> session() -> get('userid');
            $request -> session() -> put('Id',$ex_user[0]->id);
            DB::table('tbl_users')-> where('id', $id) -> update(['status'=>'1']);

             return redirect('/chart');

        } else {
            if ($ex_user[0] -> password =='') {
                return back()->with('warning', 'You already registered. Please reset the password.');
            } else{
                return back()->with('error', 'Your password is wrong, Are you forget? please again.');
            }
        }
    }

    // normal user register
    public function register(Request $request){
        $user = new NormalUsers;
        $user -> username = $request -> username;
        $al_user = NormalUsers :: where('username', $request -> username) -> get();
        if ( !$al_user -> isEmpty()){
            return back() -> with('warning', 'Your username is been using by anther user');
        }
        $el_user = NormalUsers :: where('email', $request -> email) -> get();
        if ( !$el_user -> isEmpty()){
            return back() -> with('warning', 'Your email is wrong, please again');
        }
        $user -> fullname = $request -> fullname;
        $user -> email = $request -> email;
        $user -> password =Hash::make( $request -> password ) ;
        if($request -> hasFile('avatar')){
            $filename = $request -> file('avatar')->getClientOriginalName();

            $filetype = $request -> file('avatar')->getClientOriginalExtension();
            if ($filetype != 'jpg' and $filetype != 'png' and $filetype != 'jpeg' and $filetype != 'PNG' and $filetype != 'JPG' and $filetype != 'JPEG'){
                return back() -> with('warning', 'Please upload file image just like "png" or "jpg" file!');
            }
            //Filename to store
            $filename = time().'_'.$filename;
            $filepath = public_path('storage/avatars/');
            move_uploaded_file($_FILES['avatar']['tmp_name'], $filepath.$filename);

            // Note that here, we are copying the destination of your moved file.
            // If you try with the origin file, it won't work for the same reason.
            // copy($filepath.$filename, public_path('uploads/newfolder').$filename);

            // echo $filepath.$filename;
        } else{
            $filename = 'user.png';
        }
        $user -> avatar = $filename;
        $user -> save();
        return redirect('/') -> with('success', 'Successfully Sign up!');
    }


    // normal user logout
    public function userlogout(Request $request){
        $id = $request -> session() -> get('userid');
        DB::table('tbl_users') -> where('id', $id) -> update(['status'=>'0']);
        $request -> session() -> flush();
        return redirect('/');
    }

    // app user register
    public function appUserRegister(Request $request){
        $k = 0;
        if ($request -> has(['username', 'fullname', 'password'])){
            $username = $request -> username;
            $ex_appuser = DB::table('users') -> where('username', $username) -> get();
            if( !$ex_appuser -> isEmpty() ){
                return back() -> with('warning', 'The username is already exist! Please user another username.');
            }
            $full_name = $request -> fullname;
            $password = $request -> password;
            $lga = $request -> lga;
            $wards = DB::table('polling_units') -> where('LGA_NAME', $lga) -> groupBy('WARD_NAME') -> get('WARD_NAME');
            $k=1;
            $request -> session() -> put('username', $username);
            $request -> session() -> put('fullname', $full_name);
            $request -> session() -> put('password', $password);
            $request -> session() -> put('lga', $lga);
            return view('sign.app-user-signUp', ['username'=>$username, 'fullname'=>$full_name, 'password'=>$password, 'lga'=>$lga, 'k'=>$k, 'wards'=>$wards]);
        }
        if ($request -> has('ward')){
            $ward = $request -> ward;
            $stations = DB::table('polling_units') -> where([['LGA_NAME', session()->get('lga')], ['WARD_NAME', $ward]]) -> get('POLLING_STATION_LOCATION_NAME');
            $k=2;
            $request -> session() -> put('ward', $ward);
            return view('sign.app-user-signUp', ['username'=>session('username'), 'fullname'=>session('fullname'), 'password'=>session('password'), 'lga'=>session('lga'), 'k'=>$k, 'ward'=>$ward, 'stations'=>$stations]);
        }
        if ($request -> has('station')){
            $station = $request ->station;
            $unit_id = DB::table('polling_units') -> where('LGA_NAME', session('lga')) -> where( 'WARD_NAME', session('ward')) -> where('POLLING_STATION_LOCATION_NAME', $station) -> first();
            $k=3;
            $user = new Users();
            $user -> polling_unit_id = $unit_id -> ID;
            $user -> username = session('username');
            $user -> full_name = session('fullname');
            $user -> password = session('password');
            $user -> save();
            return redirect('/user/app-user');
        }
    }

    // app user login
    public function appUserlogin(Request $request){
        $username = $request -> username;
        $password = $request -> password;
        $user = Users::where([['username', $username], ['password', $password]]) -> get();
        if ($user -> isEmpty()){
            return back() -> with('warning', 'Did you register? Please again!');
        } else{

            $unit_id = $user[0] -> polling_unit_id;
            $request -> session() -> put('appuser', $username);
            $request -> session() -> put('unit_id', $unit_id);
            return redirect('/app_action');
        }
    }
    // app user submit
    public function appUserSubmit(Request $request){
        $apc = $request -> apc;
        $pdp = $request -> pdp;
        $adc = $request -> adc;
        $apga = $request -> apga;
        $others = $request -> others;
        $invalid = $request -> invalid;
        $unit_id = $request -> session() -> get('unit_id');
        $result = new Results();
        $result -> poll_id = $unit_id;
        $result -> apc = $apc;
        $result -> pdp = $pdp;
        $result -> adc = $adc;
        $result -> apga = $apga;
        $result -> others = $others;
        $result -> invalid = $invalid;
        $result -> created = new Datetime();
        $result -> modified = new Datetime();
        $result -> save();

        return redirect('/app_signin');
    }
}
