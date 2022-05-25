<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establecimientos = Establecimiento::select("*")->where("user_id", "=", Auth::id())->get();
        return view("mis_establecimientos", compact('establecimientos'));
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
        $nivel = new Establecimiento(["user_id" => Auth::id(), "name" => $request["name"]]);
        $nivel->saveOrFail();
        return redirect()->route("establecimientos.index")->with(["mensaje" => "Establecimiento creado",]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Establecimiento  $Establecimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Establecimiento $Establecimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Establecimiento  $Establecimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Establecimiento $Establecimiento)
    {
        return view("mi_establecimiento_editar", ["Establecimiento" => $Establecimiento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Establecimiento  $Establecimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establecimiento $Establecimiento)
    {
        Establecimiento::where("id", $Establecimiento->id)->update(["name" => $request["name"]]);
        return redirect()->route("establecimientos.index")->with(["mensaje" => "Establecimiento actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Establecimiento  $Establecimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establecimiento $Establecimiento)
    {
        Establecimiento::where("id", $Establecimiento->id)->delete();
        return redirect()->route("establecimientos.index")->with(["mensaje" => "Establecimiento eliminado"]);
    }
}
