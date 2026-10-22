<?php

namespace Modules\Recetas\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';

    protected $fillable = [
        'nombre',
    ];

    public function ingredientesReceta(): HasMany
    {
        return $this->hasMany(IngredienteReceta::class, 'ingrediente_id');
    }
}
