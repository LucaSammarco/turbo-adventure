<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personaggio;
use App\Models\Razza;

class PersonaggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $razze = Razza::all()->keyBy('nome');

        $personaggi = [
            ['nome' => 'Legolas', 'razza_id' => $razze['Elfo']->id, 'arma_principale' => 'Arco', 'paese' => 'Bosco Atro'],
            ['nome' => 'Gimli', 'razza_id' => $razze['Nano']->id, 'arma_principale' => 'Ascia', 'paese' => 'Erebor'],
            ['nome' => 'Aragorn', 'razza_id' => $razze['Umano']->id, 'arma_principale' => 'Spada', 'paese' => 'Gondor'],
            ['nome' => 'Frodo Baggins', 'razza_id' => $razze['Hobbit']->id, 'arma_principale' => 'Pungolo', 'paese' => 'Contea'],
            ['nome' => 'Saruman', 'razza_id' => $razze['Maiar']->id, 'arma_principale' => 'Bastone', 'paese' => 'Isengard'],
            ['nome' => 'Sauron', 'razza_id' => $razze['Maiar']->id, 'arma_principale' => 'Anello del Potere', 'paese' => 'Mordor'],
            ['nome' => 'Gandalf', 'razza_id' => $razze['Maiar']->id, 'arma_principale' => 'Bastone', 'paese' => 'Mordor'],
            ['nome' => 'Boromir', 'razza_id' => $razze['Umano']->id, 'arma_principale' => 'Spada', 'paese' => 'Gondor'],
            ['nome' => 'Galadriel', 'razza_id' => $razze['Elfo']->id, 'arma_principale' => 'Nenya', 'paese' => 'Lothlórien'],
            ['nome' => 'Elrond', 'razza_id' => $razze['Elfo']->id, 'arma_principale' => 'Spada', 'paese' => 'Gran Burrone'],
            ['nome' => 'Samwise Gamgee', 'razza_id' => $razze['Hobbit']->id, 'arma_principale' => 'Coltello da cucina', 'paese' => 'Contea'],
            ['nome' => 'Meriadoc Brandybuck', 'razza_id' => $razze['Hobbit']->id, 'arma_principale' => 'Spada', 'paese' => 'Contea'],
            ['nome' => 'Peregrin Took', 'razza_id' => $razze['Hobbit']->id, 'arma_principale' => 'Spada', 'paese' => 'Contea'],
            ['nome' => 'Théoden', 'razza_id' => $razze['Umano']->id, 'arma_principale' => 'Spada', 'paese' => 'Rohan'],
            ['nome' => 'Éowyn', 'razza_id' => $razze['Umano']->id, 'arma_principale' => 'Spada', 'paese' => 'Rohan'],
            ['nome' => 'Éomer', 'razza_id' => $razze['Umano']->id, 'arma_principale' => 'Spada', 'paese' => 'Rohan'],
            ['nome' => 'Faramir', 'razza_id' => $razze['Umano']->id, 'arma_principale' => 'Arco', 'paese' => 'Gondor'],
            ['nome' => 'Arwen', 'razza_id' => $razze['Elfo']->id, 'arma_principale' => 'Spada', 'paese' => 'Gran Burrone'],
            ['nome' => 'Gollum', 'razza_id' => $razze['Hobbit']->id, 'arma_principale' => 'Denti', 'paese' => 'Montagne Nebbiose'],
            ['nome' => 'Grima Vermilinguo', 'razza_id' => $razze['Umano']->id, 'arma_principale' => 'Daga', 'paese' => 'Rohan'],
            ['nome' => 'Lurtz', 'razza_id' => $razze['Orco']->id, 'arma_principale' => 'Arco', 'paese' => 'Isengard'],
            ['nome' => 'Azog', 'razza_id' => $razze['Orco']->id, 'arma_principale' => 'Mazza', 'paese' => 'Moria'],
            ['nome' => 'Balin', 'razza_id' => $razze['Nano']->id, 'arma_principale' => 'Ascia', 'paese' => 'Erebor'],
            ['nome' => 'Dwalin', 'razza_id' => $razze['Nano']->id, 'arma_principale' => 'Ascia', 'paese' => 'Erebor'],
            ['nome' => 'Thorin Scudodiquercia', 'razza_id' => $razze['Nano']->id, 'arma_principale' => 'Spada', 'paese' => 'Erebor'],
            ['nome' => 'Bard l\'Arciere', 'razza_id' => $razze['Umano']->id, 'arma_principale' => 'Arco', 'paese' => 'Pontelagolungo'],
        ];

        foreach ($personaggi as $personaggio) {
            Personaggio::create($personaggio);
        }
    }
}