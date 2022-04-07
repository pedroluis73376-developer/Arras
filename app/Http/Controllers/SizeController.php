<?php

namespace App\Http\Controllers;

use App\size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class SizeController extends Controller
{
    
    public function index()
    {
        if (Gate::allows('Gerente-Administrador')) {
        $sizes=size::all();
        return view('sizes.index',compact('sizes'));
    }
    return redirect(route('index'));
    }

    
    public function create()
    {
        if (Gate::allows('Gerente-Administrador')) {
        return view('sizes.create');
    }
    return redirect(route('index'));
    }

    
    public function store(Request $request)
    {
        if (Gate::allows('Gerente-Administrador')) {
        $data = request();
        DB::table('sizes')->insert([
           'diametro' => $data['size'],
        ]);

        return redirect(action('SizeController@index'));
    }
    return redirect(route('index'));
    }

    
    public function show(size $size)
    {
        //
    }

    
    public function edit(size $size)
    {
        //
    }

    
    public function update(Request $request, size $size)
    {
        //
    }

    
    public function destroy(size $size)
    {
        if (Gate::authorize('Gerente')) {
        //
        $size->delete();
        redirect(action('SizeController@index'));
    }
    return redirect(action('SizeController@index'));
    }
}
