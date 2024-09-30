<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;


    protected $fillable = [
        'no_contrato',
        'tipo',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function negociaciones()
    {
        return $this->hasMany(Negociacion::class);
    }
}
