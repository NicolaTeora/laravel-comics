{{-- indico quale elemento vado ad estendere/rimepire --}}
@extends('layout.app')

{{-- uso il segna posto per cambiare il nome nella scheda del broswer --}}
@section('title','- comics')

{{-- 
@section('comics_css')
    <link rel="stylesheet" href="../style/style.css">
@endsection 
--}}

{{-- sviluppo il contenuto --}}
@section('main-content')

    <main  id="comicon" >
        <div class="container">
            <h1>Current Series</h1>
    
            <div class="row g-3 pt-3">
                {{-- itero l'array per stampare la collezione --}}
                @foreach ($comicon as $id=>$item)
                    
                <div class="col">
    
                    <figure>
                        {{-- inserisco l'ancor tag per creare un link che apra la pagina di dettaglio --}}
                        <a href="{{ route('comic_det', ['id' => $id]) }}">
                            <img src="{{ $item['thumb'] }}" alt="cover">
                        </a>
                        <figcaption>
                            {{ $item['series'] }}
                        </figcaption>
                    </figure>
    
                </div>
                @endforeach
              
            </div>
    
        </div>

    </main>
@endsection