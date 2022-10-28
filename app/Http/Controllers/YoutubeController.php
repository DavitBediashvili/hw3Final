<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class YoutubeController extends Controller
{
    public function run()
    {
        $info = DB::select('select * from youtubes');
        return view('Youtube',['info'=>$info]);
    }
}
