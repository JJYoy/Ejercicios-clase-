<?php

namespace Modules\Recetas\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Receta extends Model
{
    protected $table = 'recetas';

    protected $fillable = [
        'titulo',
        'porciones',
        'instrucciones',
    ];

    public function ingredientesReceta(): HasMany
    {
        return $this->hasMany(IngredienteReceta::class, 'receta_id');
    }
}