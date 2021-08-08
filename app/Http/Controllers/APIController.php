<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class APIController extends Controller
{
    public function getdata()
    {
        $data=Member::all();
        return $data;
    }
    public function add_data(Request $req)
    {
       
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
        
        //Sample test json for api
        // {
        // 	"Name":"JayaPrasad",
        // 	"Age":21
        // }
    }
    
}
