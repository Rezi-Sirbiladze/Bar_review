<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("mis_establecimientos");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Esctablecimiento  $esctablecimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Esctablecimiento $esctablecimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Esctablecimiento  $esctablecimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Esctablecimiento $esctablecimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Esctablecimiento  $esctablecimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Esctablecimiento $esctablecimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Esctablecimiento  $esctablecimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esctablecimiento $esctablecimiento)
    {
        //
    }
}
