<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NormalUers;
use App\Units;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginate;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function get_patientdata(){
        $page_name = 'normaluser';
        $normal_users = DB:: table('patienttable')->select('*') -> orderBy('patienttable.id', 'DESC') -> paginate(10);
        $normalusers = DB:: table('patienttable') -> select('*') -> get();

        return view('userManagement.normalUser', ['page_name'=> $page_name, 'normal_users'=> $normal_users, 'normalusers'=>$normalusers]);
    }
    public function get_profile(Request $request){

        $page_name = 'profile';
        $doctorData=DB::table('normalusers')->where('doctor',1)->select('*')->get();
        $userData=DB::table('normalusers')->where('username','rogue')->get();

        return view('chartmanagement\profile', ['page_name'=>$page_name, 'userData'=>$userData, 'doctorData'=>$doctorData]);
    }
    public function get_normal_user(){
        $page_name = 'normaluser';
        $normal_users = NormalUers::join('user-group', 'normalusers.is_admin', '=', 'user-group.index_id')
        -> select('normalusers.*', 'user-group.role') -> orderBy('normalusers.id', 'DESC') -> paginate(10);
        $normalusers = NormalUers::where('status', '1') -> join('user-group', 'normalusers.is_admin', '=', 'user-group.index_id')
        -> select('normalusers.*', 'user-group.role') -> get();
        // $normalusers = NormalUers:: orderBy('id', 'DESC') -> paginate(10);
        // print($normalusers);

        return view('userManagement.normalUser', ['page_name'=> $page_name, 'normal_users'=> $normal_users, 'normalusers'=>$normalusers]);
    }
    // delete the normal user!
    public function delete_normal_user(Request $request){
        $d = $request -> username;
        NormalUers::where('username', $d) -> first() -> delete();
        return json_encode($d);
    }
    // add the normal user!
    public function add_normal_user(Request $request){
        $user = new NormalUers;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> fullname = $request -> fullname;
        $user -> is_admin = $request -> is_admin;
        $user -> save();
        return json_encode("Add the user");
    }
    // update the normal user
    public function update_normal_user(Request $request){
        $username = $request -> username;
        $fullname = $request -> fullname;
        $email = $request -> email;
        $is_admin = $request -> is_admin;
        $id = $request -> id;
        NormalUers::where("id",$id) -> update(['username'=>$username, 'email'=>$email, 'fullname'=>$fullname, 'is_admin'=>$is_admin]);
        return json_encode("Update the User!!");
    }
    //check normalusers online
    public function check_normal_user(Request $request){
        $check_users = NormalUers::select('id','status')->get();
        return json_decode($check_users);
    }


    // get app users
    public function get_app_user(){
        $page_name = 'appuser';
        $appusers = Users::join('polling_units', 'polling_units.PSCODE', '=', 'users.polling_unit_id') -> select('users.uid', 'users.username', 'users.full_name', 'polling_units.POLLINGSTATIONNAME' , 'polling_units.REGIONNAME', 'polling_units.DISTRICTNAME', 'polling_units.ELECTORALAREA') -> paginate(10);
        $normalusers = NormalUers::where('status', '1') -> join('user-group', 'normalusers.is_admin', '=', 'user-group.index_id') -> select('normalusers.*', 'user-group.role') -> get();

        return view('userManagement.appUser', ['page_name'=> $page_name, 'appusers'=> $appusers, 'normalusers'=>$normalusers]);
    }
    // delete the app user!
    public function delete_app_user(Request $request){
        $d = $request -> uid;
        Users::where('uid', $d) -> delete();
        return json_encode($d);
    }
    // add the app user!
    public function add_app_user(Request $request){
        $user = new Users;
        $lga = $request -> lga;
        $ward = $request -> ward;
        $station = $request -> station;
        $unit = Units::where([['LGA_NAME', $lga], ['WARD_NAME', $ward], ['POLLING_STATION_LOCATION_NAME', $station]]) -> first();
        $user -> username = $request -> username;
        $user -> full_name = $request -> fullname;
        $user -> polling_unit_id = $unit -> ID;
        $user -> save();
        return json_encode("Add the user");
    }
    // update the app user
    public function update_app_user(Request $request){
        $username = $request -> username;
        $fullname = $request -> fullname;
        $lga = $request -> lga;
        $ward = $request -> ward;
        $station = $request -> station;
        $unit = Units::where([['LGA_NAME', $lga], ['WARD_NAME', $ward], ['POLLING_STATION_LOCATION_NAME', $station]]) -> first();
        $id = $request -> id;
        Users::where("uid",$id) -> update(['username'=>$username, 'full_name'=>$fullname, 'polling_unit_id'=>$unit->ID]);
        return json_encode("Update the User!!");
    }
    // upload appusers csv file
    public function appUserUpload(Request $request){
        // get the csv file
        $uplaod = $request -> file('csv_users');
        $filePath = $uplaod -> getRealPath();
        // open and read
        $file = fopen($filePath, 'r');



        $header = fgetcsv($file);
        // dd($header)
        $escapeHeader = [];
        // validate
        foreach ($header as $key => $value) {
            # code...
            $lheader = strtolower($value);
            // $escapedItem = preg_replace('/[^a-z]/', '', $lheader);
            array_push($escapeHeader, $lheader);
        }
        // dd($escapeHeader);

        // Looing thourgh other columns
        while($columns =  fgetcsv($file)){
            if($columns[0]==''){
                continue;
            }
            // trim data
            $data = [];
            foreach ($columns as $key => $value) {
                # code...
                // $value = preg_replace('/[^a-z]/','',$value);
                array_push($data, $value);
            }
            // dd($data);

            // tabel update
            // if the upload data is in the table, we update the data in the db
            $ex_user = Users::where('username', $data[1]) -> where('polling_unit_id', $data[0]) -> get();
            // insert the data
            if($ex_user -> isEmpty()){
                Users::insert([
                    'polling_unit_id' => $data[0],
                    'username' => $data[1],
                    'full_name' => $data[2],
                    'password' => $data[3],
                ]);
            }
            // if there is the data in db, update the data
            else{
                Users::where('username', $data[1]) -> update([
                    'full_name' => $data[2],
                    'password' => $data[3],
                ]);
            }
        }
        return redirect('/user/app-user');
    }


    // get the myself profile

}
