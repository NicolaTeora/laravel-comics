{{-- indico quale elemento vado ad estendere/rimepire --}}
@extends('layout.app')

{{-- uso il segna posto per cambiare il nome nella scheda del broswer --}}
@section('title','- comics')

{{-- @section('comics_css')
    <link rel="stylesheet" href="../style/style.css">
@endsection --}}

{{-- sviluppo il contenuto --}}
@section('main-content')
    @include('partials.header')

    <div class="container">
        <h1>current series</h1>

        <div class="row g-3">
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
    @include('partials.footer')
@endsection