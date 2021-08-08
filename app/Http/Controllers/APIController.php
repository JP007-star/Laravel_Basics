<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class APIController extends Controller
{
    public function getdata()
    {
        $data=Member::all();
        $append[]=["jp"=>"Win","divya"=>"monkey"];
        array_push($append,$data);
        return $append;
    }
    
}
