<?php

namespace App\Http\Controllers;

use App\arra;
use App\User;
use App\cotizaciones;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    
    public function index()
    {
        $arras = arra::paginate(30);
        return view('arrasUser.index', compact('arras'));
    }

   
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }


    public function show(arra $arra)
    {
        //
    }

  
    public function edit(arra $arra)
    {
        //
    }

    
    public function update(Request $request, arra $arra)
    {
        //
    }

  
    public function destroy(arra $arra)
    {
        //
    }
}
