<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class api extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        $contacts = DB::table('contacts')->get();
        return $contacts;
        // return view('manager\testdb', ['users' => $users]);
    }
}
