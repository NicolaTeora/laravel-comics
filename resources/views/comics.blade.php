{{-- indico quale elemento vado ad estendere/rimepire --}}
@extends('layout.app')

{{-- uso il segna posto per cambiare il nome nella scheda del broswer --}}
@section('title','- comics')

@section('main-content')
    @include('partials.header')

    <div class="container">
        <h1>comics</h1>

        <div class="row g-3">
            @foreach ($comicon as $item)
                
            <div class="col-4">

                <figure>
                    <img src="{{ $item['thumb'] }}" alt="">
                    <figcaption>
                        {{ $item['title'] }}
                    </figcaption>
                </figure>

            </div>
            @endforeach
          
        </div>

    </div>
    @include('partials.footer')
@endsection