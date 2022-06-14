<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Establecimiento;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        if(Auth::user()->role == "cliente"){
            $establecimientos = Establecimiento::query()
            ->join('valoraciones', 'valoraciones.establecimiento_id', '=', 'establecimientos.id')
            ->selectRaw('establecimientos.id, establecimientos.name, establecimientos.created_at, establecimientos.ubicacion')
            ->where("valoraciones.user_id", Auth::id())
            ->get();
            return view("dashboard", compact('establecimientos'));
        }
        
        return view("dashboard");

    }
}
