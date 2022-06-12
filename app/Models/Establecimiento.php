<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Establecimiento extends Model
{
    use HasFactory;

    protected $table = 'establecimientos';
    
    protected $fillable = [
        'user_id',
        'name',
        'precios',
        'sol_esp',
        'horario',
        'ubicacion'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function valoraciones(){
        return $this->hasMany(Valoracion::class);
    }

    public function valoracionesAVG(){
        $res = Valoracion::selectRaw("AVG(nota) AS media_nota")->where("establecimiento_id", "=", $this->id)->groupBy(['establecimiento_id'])->get();
        return $res;
    }


    public function myValoracion(){
        $res = Valoracion::select("*")->where([["establecimiento_id", "=", $this->id], ["user_id", "=", Auth::id()]])->first();
        if($res){
            return true;
        } else {
            return false;
        }

    }
    
    public function establecimientoPorId(){
        $res = Establecimiento::select("*")->where([["id", "=", $this->id]])->first();
        return $res;
    }
}
