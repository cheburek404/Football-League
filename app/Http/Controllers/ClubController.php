<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Club;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller {

    public function index() {
        return view('admin.club.add');
    }

    public function save(Request $req) {
        $data = new Club();

        $data->name = $req['name'];

        $image = $req->logo_image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/Images');
        $image->move($destinationPath, $imagename);
        $data->logo_image=$imagename;

        $data->save();

        return redirect()->route('admin');
    }

    public function getAll() {
        $clubs = DB::table('clubs')->get();

        return response($clubs);
    }
}
