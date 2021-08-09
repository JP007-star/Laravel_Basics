<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\AppUser;
use Illuminate\Support\Facades\Hash;


class AppUserController extends Controller
{
    function index(Request $request)
    {
        return AppUser::all();
    }
    public function loadview()
    {
       $data=["jp","divya","prasad"];
        return view("about",['names'=>$data]); 
    }
    public function fetchdata()
    {
       
        $data=AppUser::paginate(2); 
        return view("home",['datas'=>$data]); 
    }
     public function GetData(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'userpassword' => 'required | min:5',
        ]);
        $data=$req->input();
        $req->session()->put('user',$data['username']);
        $Data=Http::get("https://reqres.in/api/users?page=2");
        return view('usertable',['content'=>$Data['data']]);
    }
    function userinsert(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'age' => 'integer|min:18',
            'class' => 'required',
        ]);
    
         if(!empty($req->Id)) 
         {
            $user['Name']=$req->username;
            $user['Age']=$req->age;
            $user['Class']=$req->class;
            User::where("Id",$req->Id)->update($user);
         }  
         else
         {
            $user=new AppUser;
            $user->Name=$req->username;
            $user->Age=$req->age;
            $user->Class=$req->class;
            $user->save();
         }
        return redirect('list'); 
    }
    function apidata()
    {
        $Data=Http::get("https://reqres.in/api/users?page=2");
        return view('usertable',['content'=>$Data['data']]);
    }
    function uploadform(Request $req)
    {
       return $req->file('file')->store('docs');
    }
    function deleteuser($id)
    {
        
         $data = AppUser::where('id',$id)->delete();
         return redirect('list');
       
    }
    function edituser($id)
    {
        $data=AppUser::find($id);
        return view('addmember',['datas'=>$data]);
    }
    function List()
    {
        $data=AppUser::all();
        $data=AppUser::paginate(5); 
        return view('list',['datas'=>$data]);
    }
    function add()
    {
       $data="";
       return view('addmember',['datas'=>$data]);
    }
    function DBOperation()
    {
    //    return  DB::table('musers')
    //    ->where('Id',33)
    //    ->get();

    // return  (array)DB::table('musers')
    // ->find(33);

    //  return  DB::table('musers')
    // ->count();

    //   $user=[
    //       'Name'=>'Jp',
    //       'Age'=>9,
    //       'Class'=>'A',
    //   ];
    //   return  DB::table('musers')
    //     ->insert($user);

    //  $user=[
    //       'Name'=>'Jp',
    //       'Age'=>9,
    //       'Class'=>'A',
    //   ];
    //   return  DB::table('musers')
    //     ->where('Id',33)
    //     ->update($user);

    // return  DB::table('musers')
    //     ->where('Id',33)
    //     ->delete();

    //  return  DB::table('musers')
    //     ->avg('id');
    //  return  DB::table('musers')
    //     ->sum('id');
    //  return  DB::table('musers')
    //     ->count('id');
    // return  DB::table('musers')
    //     ->max('id');
    // return  DB::table('musers')
    //     ->min('Name');

     return  DB::table('musers')
        ->join('muserdetails','musers.Id',"=","muserdetails.Id")
        ->select('muserdetails.*')
        ->get();



    }

    public function usershow()
    {
        return AppUser::find(34)->getCompany;
    } 
   
     
}
