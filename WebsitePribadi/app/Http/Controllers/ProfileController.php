<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    public function index($id): View
    {
        $data_profile = DB::table('detail_profile')->where('id', $id)->get();
        // $data_profile = DB::table('detail_profile')->get();
        return view('welcome', ['profile' => $data_profile]);
    }
}
