<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Lentitalia',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Bari',
                'stazioni_intermedie' => 'Firenze, Roma, Campoleone,Napoli',
                'orario_di_partenza' => '2022-10-12 16-35-21',
                'orario_di_arrivo' => '2023-10-12 16-35-21',
                'codice_treno' => 124,
                'numero_carrozze' => 4,
                'in_orario' => 0,
                'minuti_di_ritardo' => 300,
                'nuovo_orario_di_partenza' => '2022-10-12 21-35-21',
                'nuovo_orario_di_arrivo' => '2023-10-12 21-35-21',
                'prezzo_biglietto' => 25.5,
                'is_aviable' => 1,

            ],
            [
                'azienda' => 'PartitoIeriItalia',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Bari',
                'stazioni_intermedie' => 'Firenze, Roma, Campoleone,Napoli',
                'orario_di_partenza' => '2022-10-11 16-35-21',
                'orario_di_arrivo' => '2023-10-11 16-35-21',
                'codice_treno' => 197,
                'numero_carrozze' => 14,
                'in_orario' => 1,
                'minuti_di_ritardo' => 0,
                'nuovo_orario_di_partenza' => null,
                'nuovo_orario_di_arrivo' => null,
                'prezzo_biglietto' => 125.5,
                'is_aviable' =>0,

            ],
            [
                'azienda' => 'Mai Arrivi',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Bari',
                'stazioni_intermedie' => 'Firenze, Roma, Campoleone,Napoli',
                'orario_di_partenza' => '2022-10-12 16-35-21',
                'orario_di_arrivo' => '3050-10-12 16-35-21',
                'codice_treno' => 1,
                'numero_carrozze' => 1,
                'in_orario' => 1,
                'minuti_di_ritardo' => 0,
                'nuovo_orario_di_partenza' => null,
                'nuovo_orario_di_arrivo' => null,
                'prezzo_biglietto' => 0.5,
                'is_aviable' =>1,

            ],
            [
                'azienda' => 'Velocitalia',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Bari',
                'stazioni_intermedie' => null,
                'orario_di_partenza' => '2022-10-12 16-35-21',
                'orario_di_arrivo' => '2022-10-12 16-45-21',
                'codice_treno' => 14,
                'numero_carrozze' => 1,
                'in_orario' => 1,
                'minuti_di_ritardo' => 0,
                'nuovo_orario_di_partenza' => null,
                'nuovo_orario_di_arrivo' => null,
                'prezzo_biglietto' => 500,
                'is_aviable' =>1,

            ],
            [
                'azienda' => 'Galaxy Express',
                'stazione_di_partenza' => 'Terra',
                'stazione_di_arrivo' => 'Galassia Di Andromeda',
                'stazioni_intermedie' => 'Marte,Giove, Alpha Centauri',
                'orario_di_partenza' => '2022-10-12 20-00-00',
                'orario_di_arrivo' => '9999-10-12 00-00-00',
                'codice_treno' => 999,
                'numero_carrozze' => 120,
                'in_orario' => 1,
                'minuti_di_ritardo' => 0,
                'nuovo_orario_di_partenza' => null,
                'nuovo_orario_di_arrivo' => null,
                'prezzo_biglietto' => 0,
                'is_aviable' =>1,

            ]
        ];
        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->stazioni_intermedie = $train['stazioni_intermedie'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->minuti_di_ritardo = $train['minuti_di_ritardo'];
            $newTrain->nuovo_orario_di_partenza = $train['nuovo_orario_di_partenza'];
            $newTrain->nuovo_orario_di_arrivo = $train['nuovo_orario_di_arrivo'];
            $newTrain->prezzo_biglietto = $train['prezzo_biglietto'];
            $newTrain->is_aviable = $train['is_aviable'];

            $newTrain->save();
        }
    }
}
