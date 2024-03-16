{{-- indico quale elemento vado ad estendere/rimepire --}}
@extends('layout.app')

{{-- uso il segna posto per cambiare il nome nella scheda del broswer --}}
@section('title','- characters')

@section('main-content')
    <main>
      @include('.partials.header')

      <div class="container">

        <h1>characters</h1>
      
      </div>

      @include('.partials.footer')
    </main>
@endsection