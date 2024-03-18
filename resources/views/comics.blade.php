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
    @include('partials.header')

    <main  id="comicon" >
        <div class="container">
            <h1>current series</h1>
    
            <div class="row g-3">
                {{-- itero l'array per stampare la collezione --}}
                @foreach ($comicon as $item)
                    
                <div class="col">
    
                    <figure>
                        <img src="{{ $item['thumb'] }}" alt="cover">
                        <figcaption>
                            {{ $item['series'] }}
                        </figcaption>
                    </figure>
    
                </div>
                @endforeach
              
            </div>
    
        </div>

    </main>

    @include('partials.footer')
@endsection