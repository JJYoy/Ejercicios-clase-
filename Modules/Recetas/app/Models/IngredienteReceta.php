<?php

namespace Modules\Recetas\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IngredienteReceta extends Model
{
    protected $table = 'ingrediente_recetas';

    protected $fillable = [
        'receta_id',
        'ingrediente_id',
        'cantidad',
        'unidad_medida',
    ];

    public function receta(): BelongsTo
    {
        return $this->belongsTo(Receta::class, 'receta_id');
    }

    public function ingrediente(): BelongsTo
    {
        return $this->belongsTo(Ingrediente::class, 'ingrediente_id');
    }
}