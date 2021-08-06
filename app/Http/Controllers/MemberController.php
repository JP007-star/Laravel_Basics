<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Member;
class MemberController extends Controller
{
   public function index()
    {
        return Member::find(1)->getDevice;
    } 
    public function device(Member $key)
    {
        return $key;
    }
}
