<?php

namespace App\Http\Controllers;

use App\pantInfo;
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

    
}
