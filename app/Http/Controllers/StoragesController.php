<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hardware;
use App\Storages;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use App\Http\Requests\HardwareFormRequest;

use DB;

class StoragesController extends Controller
{
    

	public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $storages=DB::table('storages')->where('hardware_id','LIKE','%'.$query.'%')
            ->orderBy('hardware_id','asc')
            ->paginate(7);
            return view('storages.index',["storages"=>$storages,"searchText"=>$query]);
        }
    }


    public function show($hardware_id)
    {
        $hardware=Hardware::findOrFail($hardware_id);
        return view('storages.show',["hardware"=>$hardware]);    
    }
}
