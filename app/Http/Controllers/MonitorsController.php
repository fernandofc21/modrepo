<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Monitors;
use App\Hardware;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use App\Http\Requests\PrintersFormRequest;

use DB;

class MonitorsController extends Controller
{
    

	public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $monitors=Monitors::where('hardware_id','LIKE','%'.$query.'%')
            ->orderBy('hardware_id','asc')
            ->paginate(7);
            return view('monitors.index',["monitors"=>$monitors,"searchText"=>$query]);
        }
    }


    public function show($hardware_id)
    {
        $hardware=Hardware::findOrFail($hardware_id);
        return view('monitors.show',["hardware"=>$hardware]);  
    }
}
