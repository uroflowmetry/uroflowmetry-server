<?php
/**
 * Created by PhpStorm.
 * User: rogue
 * Date: 12/4/2019
 * Time: 4:07 AM
 */
namespace App\Http\Controllers\Admin;

use App\RequestRestult;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NormalUsers, App\CheckResult, App\Users, App\Units;
use Illuminate\Support\Facades\Hash;

class RegisterDataController extends Controller
{
    public function appLogin(Request $request){
        $user = new NormalUsers;
        $user->userId=$request['userId'];
        $user->password=$request['password'];
//            return $request['userId'];

            $ex_user=DB::table('tbl_users')->where('userId',$user->userId)->get();
            if($ex_user->isEmpty()){
                 return $result_data = array("status"=>0,"message" => "Invalid account", "useridx" => -1);
               
            }
            if(Hash::check($user->password,$ex_user[0]->password)){
                return $result_data=array("status"=>1,"message"=>"Login success",'useridx'=>strval($ex_user[0]->id));
            } else {
                return $result_data=array("status"=>0,"message"=>"Invalid account",'useridx'=>-1);
            }
            
            
    }




    public function appSignup(Request $request){
        $user=new NormalUsers;

        $user->userId=$request['userId'];


        $al_user=DB::table('tbl_users')->where('userId',$request['userId'])->get();

        if(!$al_user->isEmpty()){
            return $result_data=array("status"=>0,"message"=>"Your userID is been using by another user");
        }

        //$user->email=$request['email'];
        //$el_user=DB::table('tbl_users')->where('email',$request['email'])->get();

        //if(!$el_user->isEmpty()){
        //    return $result_data=array("status"=>0,"result"=>"Your email is wrong,please again ");
        //}

        $user->fullname=$request['fullname'];
        $user->password=Hash::make($request['password']);
        $user->save();
        return $result_data=array("status"=>1,"result"=>"Successful Sign Up");
    }

    public function registerAppdata(Request $request){

        $i=0;
        $user=new NormalUsers;
        $user->id=$request["userIdx"];
        $user->email=$request["email"];
        $user->doctoremail=$request["doctoremail"];
        $user->volume=$request["volume"];
  
        DB::table('tbl_users')->where("id",$request["userIdx"])->update(['email'=>$user->email,'doctoremail'=>$user->doctoremail,'volume'=>$user->volume]);
        
        $checkdata=new CheckResult;
        if($user->id==null)
            return $result_data=array("status"=>0,"message"=>"Register is failed");
        CheckResult::where("userid",$user->id)->delete();
        foreach ($request['data'] as $perdata){
            $i++;
            $checkdata=new CheckResult;
            $checkdata->checktime=$perdata['checktime'];
            $checkdata->measuredvolume=$perdata['measuredvolume'];
            $checkdata->measuredduration=$perdata['measuredduration'];
            $checkdata->flowrate=$perdata['flowrate'];
            $checkdata->timedistance=$perdata['timedistance'];
            $checkdata->userid=$request["userIdx"];
            $checkdata->save();
        }
        return $result_data=array("status"=>1,"message"=>"Register is success");
    }


    // normal user logout

}
