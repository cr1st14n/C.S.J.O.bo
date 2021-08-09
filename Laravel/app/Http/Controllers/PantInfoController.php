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
        //
    }
    public function create1(Request $request)
    {
        return $request->input('tur');
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
        return $e;
    }
}
