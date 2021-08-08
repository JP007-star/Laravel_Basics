<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\ListUser;
use App\Models\Member;

class ListController extends Controller
{
    public function list()
    {
        //return DB::connection('mysql2')->table('data_modals')->get();
       // return  ListUser::all();
        return  Member::all();
    }
}
