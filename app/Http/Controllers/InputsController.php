<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inputs;
use App\Hardware;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use App\Http\Requests\PrintersFormRequest;

use DB;

class InputsController extends Controller
{
    

	public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $inputs=Inputs::where('hardware_id','LIKE','%'.$query.'%')
            ->orderBy('hardware_id','asc')
            ->paginate(7);
            return view('inputs.index',["inputs"=>$inputs,"searchText"=>$query]);
        }
    }


    public function show($hardware_id)
    {
        $hardware=Hardware::findOrFail($hardware_id);
        return view('inputs.show',["hardware"=>$hardware]);     
    }
}
