<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carrera;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $majors = carrera::all();
        return view('majors.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $carrera = new Controller();
        $carrera->codigo = $request->codigo;
        $carrera->nombre = $request->nombre;
        $carrera->facultad = $request->facultad;
        $carrera->save();
        return redirect()->route('majors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $carrera = Controller::find($id);
        return view('majors.show', compact('majors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $carrera = Controller::find($id);
        return view('majors.edit', compact('majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $carrera = Controller::find($id);
        $carrera->codigo = $request->codigo;
        $carrera->nombre = $request->nombre;
        $carrera->facultad = $request->facultad;
        $carrera->save();
        return redirect()->route('majors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $carrera = Controller::find($id);
        $carrera->delete();
        return redirect()->route('majors.index');
    }
}