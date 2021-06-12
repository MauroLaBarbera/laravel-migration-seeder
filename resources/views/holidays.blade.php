@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center m-5">HOLIDAYS</h1>
        @foreach ($holidays as $holiday)
            <article>
                <img src="https://www.arisassociazione.it/images/colosseo_roma_bellissima.jpg" class="img-fluid" alt="">
                <h2> Destinazione: {{ $holiday->location }}</h2>
                <h4> Data inizio: {{ $holiday->start }}</h4>
                <h4> Data fine: {{ $holiday->end }}</h4>
                <h3> Prezzo: {{ $holiday->price }}€</h3>
                <p> Descrizione: {{ $holiday->description }}</p>
                @if (! $loop->last)
                    <hr>
                @endif
            </article>
            
        @endforeach

        <section>
                {{ $holidays->links() }}
        </section>
    </div>
@endsection