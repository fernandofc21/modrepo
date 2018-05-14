<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drives;
use App\Hardware;
use App\Http\Requests;
use Illuminate\support\facades\redirect;
use Barryvdh\DomPDF\Facade as PDF;

use DB;

class DrivesController extends Controller
{
    

	public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $drives=Drives::where('hardware_id','LIKE','%'.$query.'%')
            ->orderBy('hardware_id','asc')
            ->paginate(7);
            return view('drives.index',["drives"=>$drives,"searchText"=>$query]);
        }
    }


    public function show($hardware_id)
    {
        $hardware=Hardware::findOrFail($hardware_id);
        return view('drives.show',["hardware"=>$hardware]);  
    }


    public function pdf($hardware_id)
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
       /* $hardware=Hardware::findOrFail($harware_id); */

        $hardware = Hardware::findOrFail($hardware_id); 

        $pdf = PDF::loadView('drives.pdf', ["hardware"=>$hardware]);

        return $pdf->download('reporte_unidades.pdf');
    }
}
