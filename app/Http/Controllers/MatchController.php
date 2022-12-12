<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MatchController extends Controller {
    
    public function index() {
        $data = DB::table('clubs')->get();

        return view('admin.match.show', ['clubs' => $data]);
    }


    public function addMatch() {
        $data = DB::table('clubs')->get();

        return view('admin.match.add', ['clubs' => $data]);
    }
}
