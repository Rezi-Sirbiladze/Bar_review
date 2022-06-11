<?php

namespace App\Http\Controllers;

use App\Models\Valoracion;
use App\Models\Establecimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValoracionController extends Controller
{
    public function indexAll()
    {
        $valoraciones = Valoracion::select("*")->get();
        return view("all_valoraciones", compact('valoraciones'));
    }

    public function index()
    {
        $valoraciones = Valoracion::select("*")->where("user_id", "=", Auth::id())->get();
        return view("mis_valoraciones", compact('valoraciones'));
    }

    public function indexValorar(Request $request)
    {
        $Establecimiento = Establecimiento::select("*")->where("id", $request->id)->first();
        return view("valorar_establecimiento", compact("Establecimiento"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $valoracion = new Valoracion(["user_id" => Auth::id(), "establecimiento_id" => $request["establecimiento_id"], "nota" => $request["nota"], "puntos_pos" => $request["puntos_pos"], "puntos_neg" => $request["puntos_neg"]]);
        $valoracion->saveOrFail();
        return redirect()->route("establecimientos")->with(["mensaje" => "Valoración creada",]);
    }

    public function show(Valoracion $valoracion)
    {
        //
    }

    public function edit($id)
    {
        $valoracion = Valoracion::select("*")->where([["establecimiento_id", "=", $id], ["user_id", "=", Auth::id()]])->first();
        $Establecimiento = Establecimiento::select("*")->where([["id", "=", $valoracion->establecimiento_id]])->first();
        return view("mi_valoracion_editar", compact("valoracion", "Establecimiento"));
    }

    public function update(Request $request, $id)
    {
        Valoracion::where("id", $id)->update(["nota" => $request["nota"], "puntos_pos" => $request["puntos_pos"], "puntos_neg" => $request["puntos_neg"]]);
        return redirect()->route("establecimientos")->with(["mensaje" => "Valoracion actualizada"]);
    }

    public function destroy($id)
    {
        Valoracion::where([["id", "=", $id], ["user_id", "=", Auth::id()]])->delete();
        return redirect()->route("establecimientos")->with(["mensaje" => "Valoracion eliminada"]);
    }
}
