<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class pantInf extends Controller
{
    public function index()
    {
        return View('pantallaInf.pantalla_F');
    }
    public function ViewHomePantInfo()
    {
        return View('viewRecepcion.viewPantInfo.home');
    }
   
}
