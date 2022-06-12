<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Establecimiento;
use App\Models\Valoracion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstablecimientoController extends Controller
{
    public function indexEntrada()
    {
        $TopEstablecimientos = Establecimiento::query()
        ->join('valoraciones', 'valoraciones.establecimiento_id', '=', 'establecimientos.id')
        ->selectRaw('establecimientos.id, avg(valoraciones.nota) AS media_nota')
        ->groupBy(['establecimientos.id'])
        ->orderByDesc('media_nota')
        ->take(3)
        ->get();

        $estatisticas = array (
            "clientes" => User::where("role", "cliente")->count(),
            "empresas" => User::where("role", "empresa")->count(),
            "establecimientos" => Establecimiento::count(),
            "valoraciones" => Valoracion::count(),
        );


        return view("entrada", compact('TopEstablecimientos', "estatisticas"));
    }

    public function indexRanking()
    {
        $TopEstablecimientos = Establecimiento::query()
        ->join('valoraciones', 'valoraciones.establecimiento_id', '=', 'establecimientos.id')
        ->selectRaw('establecimientos.id, avg(valoraciones.nota) AS media_nota')
        ->groupBy(['establecimientos.id'])
        ->orderByDesc('media_nota')
        ->take(10)
        ->get();

        return view("top_establecimientos", compact('TopEstablecimientos'));
    }

    public function indexAll()
    {
        $establecimientos = Establecimiento::select("*")->get();
        return view("all_establecimientos", compact('establecimientos'));
    }

    public function index()
    {
        $establecimientos = Establecimiento::select("*")->where("user_id", "=", Auth::id())->get();
        return view("mis_establecimientos", compact('establecimientos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $establecimiento = new Establecimiento(
            ["user_id" => Auth::id(),
             "name" => $request["name"],
             "descripcion" => $request["descripcion"],
             "precios" => $request["precios"],
             "sol_esp" => $request["sol_esp"],
             "horario" => $request["horario"],
             "ubicacion" => $request["ubicacion"],
            ]);
        $establecimiento->saveOrFail();
        return redirect()->route("mis_establecimientos.index")->with(["mensaje" => "Establecimiento creado",]);
    }

    public function show($id)
    {
        $Establecimiento = Establecimiento::select("*")->where("id", $id)->first();
        return view("show_establecimiento", compact("Establecimiento"));
    }

    public function edit($id)
    {
        $Establecimiento = Establecimiento::select("*")->where("id", $id)->first();
        return view("mi_establecimiento_editar", compact("Establecimiento"));
    }

    public function update(Request $request, $id)
    {
        Establecimiento::where("id", $id)->update(
            ["user_id" => Auth::id(),
            "name" => $request["name"],
            "descripcion" => $request["descripcion"],
            "precios" => $request["precios"],
            "sol_esp" => $request["sol_esp"],
            "horario" => $request["horario"],
            "ubicacion" => $request["ubicacion"],
        ]);
        return redirect()->route("mis_establecimientos.index")->with(["mensaje" => "Establecimiento actualizado"]);
    }

    public function destroy($id)
    {
        Establecimiento::where("id", $id)->delete();
        return redirect()->route("mis_establecimientos.index")->with(["mensaje" => "Establecimiento eliminado"]);
    }
}
