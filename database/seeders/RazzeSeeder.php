<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Razza;

class RazzeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $razze = [
            ['nome' => 'Elfo', 'descrizione' => 'Una razza longeva e nobile.'],
            ['nome' => 'Nano', 'descrizione' => 'Piccoli, robusti e amanti delle miniere.'],
            ['nome' => 'Umano', 'descrizione' => 'La razza più numerosa e versatile della Terra di Mezzo.'],
            ['nome' => 'Hobbit', 'descrizione' => 'Piccoli esseri amanti della pace e della natura.'],
            ['nome' => 'Orco', 'descrizione' => 'Feroci guerrieri nati per la guerra.'],
            ['nome' => 'Goblin', 'descrizione' => 'Piccoli e malvagi, astuti nelle caverne.'],
            ['nome' => 'Ent', 'descrizione' => 'Giganteschi guardiani delle foreste.'],
            ['nome' => 'Maiar', 'descrizione' => 'Spiriti potenti con forma umana, come Gandalf.']
        ];
        foreach ($razze as $razza) {
            Razza::create($razza);
        }
    }
}