<?php

// app/Http/Controllers/CategoriaController.php
namespace App\Http\Controllers;

use APP\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller {
    public function index(){
        $equipo = equipo::with('categoria')->get(); 
        dd($equipo);
    }    
}