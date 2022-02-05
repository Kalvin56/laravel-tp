@extends("base")

@section("content")
    <h1>Template</h1>
    @foreach ($voitures as $voiture)
        <p>{{ $voiture->getMarque() }} / Options : {{ $voiture->getText() }}</p>
    @endforeach
@endsection