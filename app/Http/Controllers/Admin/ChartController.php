<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Results;
use App\NormalUers;
use App\Units;

class ChartController extends Controller
{
    public function get_patientdata(){
        $page_name = 'chart';
        $normal_users = DB:: table('tbl_data')->where('userid',session('Id')) -> orderBy('tbl_data.id', 'DESC') -> paginate(5);
        $normalusers = DB:: table('tbl_data') -> select('*') -> get();

        return view('chartmanagement.chartManage', ['page_name'=> $page_name, 'normal_users'=> $normal_users, 'normalusers'=>$normalusers]);
    }
    public function get_profile(Request $request){

        $page_name = 'profile';
//        $doctorData=DB::table('tbl_users')->where('doctor',1)->select('*')->get();
        $userData=DB::table('tbl_users')->where('id',session('Id'))->get();

        return view('chartmanagement.profile', ['page_name'=>$page_name, 'userData'=>$userData,]);
    }

    public function ex(Request $request){
        $exs = Units::get();
        $page_name = "efef";
        $normalusers = NormalUers::where('status', '1') -> join('user-group', 'normalusers.is_admin', '=', 'user-group.index_id')
        -> select('normalusers.*', 'user-group.role') -> get();
        return view('chartmanagement\ex', ['exs'=> $exs, 'page_name'=>$page_name,'normalusers'=>$normalusers]);
    }

}
