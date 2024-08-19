<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaggio extends Model
{
    use HasFactory;

    protected $table = 'personaggi';

    protected $fillable = ['nome', 'razza_id', 'arma_principale', 'paese'];

    // Definisce la relazione many-to-one con Razza
    public function razza()
    {
        return $this->belongsTo(Razza::class);
    }
}