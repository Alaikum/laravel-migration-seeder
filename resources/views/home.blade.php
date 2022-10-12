@extends('layouts.app')
@section('metaTitle', 'Homa Page')

@section('content')
    <h1>Lista Treni</h1>
    
    @foreach ($trains as $el)
    <div>
            <h2>{{ $el->azienda }}</h2>
            <ul>
                <li>
                    Stazione di partenza: {{ $el->stazione_di_partenza }} -_- Stazione di arrivo:
                    {{ $el->stazione_di_arrivo }}
                </li>
                <li>
                    Fermate: {{ $el->stazioni_intermedie }}
                </li>
                <li>
                    Partenza: {{ $el->orario_di_partenza }} / Arrivo: {{ $el->orario_di_arrivo }}
                </li>
                <li>
                    Treno num: {{ $el->codice_treno }}-Carrozze {{ $el->numero_carrozze }}
                </li>
                @if (!$el->in_orario)
                    <li style="color: red; font-size:2rem;">
                        Minuti di ritardo: {{ $el->minuti_di_ritardo }}
                    </li>
                    <li>
                        Nuovo Orario di Partenza: {{ $el->nuovo_orario_di_partenza }} / Nuovo Orario di Arrivo:
                        {{ $el->nuovo_orario_di_arrivo }}
                    </li>
                @endif

                <li>
                    <strong> Prezzo: {{ $el->prezzo_biglietto }} €</strong>
                </li>

            </ul>
        </div>
        @endforeach

@endsection
