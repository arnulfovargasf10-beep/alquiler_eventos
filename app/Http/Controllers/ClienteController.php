<?php

// app/Http/Controllers/CategoriaController.php
namespace App\Http\Controllers;

use APP\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller {
    public function index(){
        $cliente = cliente::with('alquiler')->get(); 
        dd($cliente);
    }    
}