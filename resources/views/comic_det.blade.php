{{-- indico quale elemento vado ad estendere/rimepire --}}
@extends('layout.app')

{{-- uso il segna posto per cambiare il nome nella scheda del broswer --}}
@section('title','- comic section')

{{-- sviluppo il contenuto --}}
@section('main-content')

    <div class="container">
        <h2>
            dettagli serie
        </h2>
        <p><b>{{ $item['title'] }}</b></p>
        <p>{{$item['description']}}</p>
    </div>

@endsection