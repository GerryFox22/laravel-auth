@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="mt-4">

            <h1 class="mb-4">{{ $comic->titolo }}</h1>
            
            <div class="col-2 mb-3 ">
                <img src="{{ $comic->immagine }}" alt="immagine {{ $comic->titolo }}">
            </div>  
                
            <div class="col-10">
                <p><strong>Autore : </strong> {{ $comic->autore }}</p>
                <p><strong>Anno Pubblicazione:</strong> {{ $comic->anno_pubblicazione }}</p>
                <p><strong>Descrizione : </strong> {{ $comic->descrizione }}</p>
            </div>  
                
                
            <a href="{{ route('admin.comics.index') }}">Ritorna ai fumetti</a>
            
        </div>
    </div>
@endsection
