<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Networks;
use App\Hardware;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use App\Http\Requests\PrintersFormRequest;

use DB;

class NetworksController extends Controller
{
    

	public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $networks=Networks::where('hardware_id','LIKE','%'.$query.'%')
            ->orderBy('hardware_id','asc')
            ->paginate(7);
            return view('networks.index',["networks"=>$networks,"searchText"=>$query]);
        }
    }


    public function show($hardware_id)
    {
        /**$networks=Networks::select('id','hardware_id','description','type','typemib','speed','macaddr','ipaddress','ipmask','ipgateway','ipsubnet','ipdhcp','virtualdev')
        ->where ('hardware_id','=',$hardware_id)
        ->get();
        return view('networks.show',["networks"=>$networks]);   **/

        $hardware=Hardware::findOrFail($hardware_id);
        return view('networks.show',["hardware"=>$hardware]); 

    }
}
