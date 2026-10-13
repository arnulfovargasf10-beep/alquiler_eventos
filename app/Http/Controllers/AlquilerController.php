<?php

// app/Http/Controllers/CategoriaController.php
namespace App\Http\Controllers;

use APP\Models\Alquiler;
use Illuminate\Http\Request;

class AlquilerController extends Controller {
    public function index(){
        $alquiler = alquiler::with('Cliente')->get(); 
        dd($alquiler);
        $alquiler = alquiler::with('empleado')->get();
        dd($alquiler);
    }
}