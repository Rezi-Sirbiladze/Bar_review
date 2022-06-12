<?php

namespace App\Http\Controllers;

use App\Models\Valoracion;
use App\Models\Establecimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function index(Request $request)
    {
        switch ($request["orden"]) {
            case "1":
                $TopEstablecimientos = Establecimiento::query()
                ->join('valoraciones', 'valoraciones.establecimiento_id', '=', 'establecimientos.id')
                ->selectRaw('establecimientos.id, establecimientos.created_at, establecimientos.ubicacion, establecimientos.name, avg(valoraciones.nota) AS media_nota')
                ->groupBy(['establecimientos.id', "establecimientos.created_at", "establecimientos.ubicacion", "establecimientos.name"])
                ->orderByDesc('establecimientos.name')
                ->take(3)
                ->get();


            return $TopEstablecimientos;
        case "2":
            $TopEstablecimientos = Establecimiento::query()
            ->join('valoraciones', 'valoraciones.establecimiento_id', '=', 'establecimientos.id')
            ->selectRaw('establecimientos.id, establecimientos.created_at, establecimientos.ubicacion, establecimientos.name, avg(valoraciones.nota) AS media_nota')
            ->groupBy(['establecimientos.id', "establecimientos.created_at", "establecimientos.ubicacion", "establecimientos.name"])
            ->orderByDesc('media_nota')
            ->take(3)
            ->get();
            return $TopEstablecimientos;
            break;
        case "3":
        
            break;
        case "4":
            $TopEstablecimientos = Establecimiento::query()
            ->join('valoraciones', 'valoraciones.establecimiento_id', '=', 'establecimientos.id')
            ->selectRaw('establecimientos.id, establecimientos.created_at, establecimientos.ubicacion, establecimientos.name, avg(valoraciones.nota) AS media_nota')
            ->groupBy(['establecimientos.id', "establecimientos.created_at", "establecimientos.ubicacion", "establecimientos.name"])
            ->take(3)
            ->get();
            return $TopEstablecimientos;
        break;
        default:

            break;
        }

    }
}
