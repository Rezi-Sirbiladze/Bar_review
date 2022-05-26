<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    protected $table = 'valoraciones';

    protected $fillable = [
        'user_id',
        'establecimiento_id',
        'nota',
        'puntos_pos',
        'puntos_neg'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class);
    }
}
