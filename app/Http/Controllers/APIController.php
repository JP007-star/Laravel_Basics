<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Validator;

class APIController extends Controller
{
    public function getdata()
    {
        $data=Member::all();
        return $data;
    }
    public function add_data(Request $req)
    {
        $rules=array(
            "Name"=>"required",
            "Age"=>"required"
        );
        $result=Validator::make($req->all(),$rules);
        if($result->fails())
        {
            return response()->json($result->errors());
        }
        else{
        $data=New Member;
        $data->Name=$req->Name;
        $data->Age=$req->Age;
        $result=$data->save();
        if($result)
        {
            return "Data Saved Succesfully";
        }
        else
        {
            return "Oops something went wrong";
        }
     }
        
        //Sample test json for api
        // {
        // 	"Name":"JayaPrasad",
        // 	"Age":21
        // }
    }
    public function update_data( Request $req)
    {
        $data=Member::find($req->id);
        $data->Name=$req->Name;
        $data->Age=$req->Age;
        $result=$data->save();
        if($result)
        {
            return "Data Updated Succesfully";
        }
        else
        {
            return "Oops something went wrong";
        }
        //Sample test json for api
        // {
        // 	"Name":"JayaPrasad",
        // 	"Age":21,
        //  "id":3
        // }
    }
    public function delete_data($id)
    {
        $data=Member::find($id);
        $result=$data->delete();
        if($result)
        {
            return "Data Deleted Succesfully";
        }
        else
        {
            return "Oops something went wrong";
        }
    }
    public function search($name)
    {
        return Member::where("Name","like","%".$name."%")->get();
    }
    
}
