<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Razza extends Model
{
    use HasFactory;

    protected $table = 'razze';

    protected $fillable = ['nome', 'descrizione'];

    // Definisce la relazione one-to-many con Personaggio
    public function personaggi()
    {
        return $this->hasMany(Personaggio::class);
    }
}