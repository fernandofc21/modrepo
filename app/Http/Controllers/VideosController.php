<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Videos;
use App\Hardware;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use App\Http\Requests\PrintersFormRequest;

use DB;

class videosController extends Controller
{
    

	public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $videos=Videos::where('hardware_id','LIKE','%'.$query.'%')
            ->orderBy('hardware_id','asc')
            ->paginate(7);
            return view('videos.index',["videos"=>$videos,"searchText"=>$query]);
        }
    }


    public function show($hardware_id)
    {
       $hardware=Hardware::findOrFail($hardware_id);
        return view('videos.show',["hardware"=>$hardware]);     
    }
}
