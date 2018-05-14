<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ports;
use App\Hardware;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use App\Http\Requests\PrintersFormRequest;
use Barryvdh\DomPDF\Facade as PDF;

use DB;

class PortsController extends Controller
{
    

	public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $ports=Ports::where('hardware_id','LIKE','%'.$query.'%')
            ->orderBy('hardware_id','asc')
            ->paginate(7);
            return view('ports.index',["ports"=>$ports,"searchText"=>$query]);
        }
    }


    public function show($hardware_id)
    {
        $hardware=Hardware::findOrFail($hardware_id);
        return view('ports.show',["hardware"=>$hardware]);     
    }

    public function pdf($hardware_id)
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
       /* $hardware=Hardware::findOrFail($harware_id); */

        $hardware = Hardware::findOrFail($hardware_id); 

        $pdf = PDF::loadView('ports.pdf', ["hardware"=>$hardware]);

        return $pdf->download('reporte_puertos.pdf');
    }



}
