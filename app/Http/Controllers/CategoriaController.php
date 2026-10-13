<?php

//App/Http/Controllers/CategoriaController.php
namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::with('alquiler')->get(); 
        dd($categorias);
    }    
}

    
