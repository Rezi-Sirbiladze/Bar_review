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

    public function myValoracion(){
        $res = Valoracion::select("*")->where([["establecimiento_id", "=", $this->id], ["user_id", "=", Auth::id()]])->first();
        if($res){
            return true;
        } else {
            return false;
        }

    }
}
