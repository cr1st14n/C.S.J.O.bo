<?php

namespace App\Http\Controllers;

use App\pantInfo;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PantInfoController extends Controller
{

    public function index()
    {
        return View('pantallaInf.pantalla_F');
    }
    public function ViewHomePantInfo()
    {
        return View('viewRecepcion.viewPantInfo.home');
    }
    public function  listData1()
    {
        $d =[];
        $variable = pantInfo::get();
            foreach ($variable as $key => $value) {
                $tr=[   'id'=>$value['id'],
                        'pf_esp'=>$value['pf_esp'],
                        'pf_med'=>$value['pf_med'],
                        'pf_tur'=> unserialize($value['pf_tur']),
                        'pf_fecha'=>$value['ca_fecha'],
                    ];
                    array_push($d,$tr);
            }
        return $d;

//pf_esp
// pf_med
// pf_tur
// ca_fecha




    }
    public function create1(Request $request)
    {
        // return Auth::user()->usu_ci;
        $new = new pantInfo();
        $new->pf_esp = $request->input('esp');
        $new->pf_med = $request->input('med');
        $new->pf_cos = $request->input('cos');
        $new->pf_tur = serialize($request->input('tur'));

        $new->ca_usu_id = Auth::user()->id;
        $new->ca_tipo = 'create';
        $new->ca_fecha = Carbon::now();
        $new->ca_estado = 1;
        $e = $new->save();
        return ($e) ? 1 : 0 ;        
    }
}
