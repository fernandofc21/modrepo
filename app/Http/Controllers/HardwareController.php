<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hardware;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use App\Http\Requests\HardwareFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use DB;

class HardwareController extends Controller
{

	public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $hardwares=Hardware::where('name','LIKE','%'.$query.'%')
            ->orderBy('id','asc')
            ->paginate(7);
            return view('inicio.index',["hardwares"=>$hardwares,"searchText"=>$query]);
        }
    }

    public function show($id)
    {
        $hardwares=Hardware::find($id);
        return view('inicio.show',["hardware" => $hardwares]);    
    }


    public function pdf($id)
    {        
        
        $hardware = Hardware::findOrFail($id); 

        $pdf = PDF::loadView('inicio.pdf', ["hardware"=>$hardware]);

        return $pdf->download('reporte_hardware.pdf');
    }


}
