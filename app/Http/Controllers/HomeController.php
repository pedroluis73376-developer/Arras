<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if (Gate::allows('Gerente-Administrador')) {
            return view('home');
        }
        return redirect(route('index'));
    }
}
