<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negociacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'contrato_id',
        'user_id',
        'detalles',
        'fecha',
        'estado',
    ];

    public function contrato()
    {
        return $this->belongsTo(Contrato::class);
    }

    /**
     * Relación: Una negociación pertenece a un usuario.
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
