<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Softwares;
use App\Hardware;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use App\Http\Requests\SoftwaresFormRequest;

use DB;

class SoftwaresController extends Controller
{
    

	public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $softwares=Softwares::where('hardware_id','LIKE','%'.$query.'%')
            ->orderBy('hardware_id','asc')
            ->paginate(7);
            return view('softwares.index',["softwares"=>$softwares,"searchText"=>$query]);
        }
    }


    public function show($hardware_id)
    {
        $hardware=Hardware::findOrFail($hardware_id);
        return view('softwares.show',["hardware"=>$hardware]);
    }
}
