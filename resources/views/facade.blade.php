@extends("base")

@section("content")
    <h1>Facade</h1>
    <p>Usine : {{ get_class($usine) }}</p>
    <p>Concession : {{ $concession->getName() }}</p>
    Voitures :
    @foreach ($concession->getVoitures() as $voiture)
        <p>{{ $voiture->getName(); }}</p>
    @endforeach
    Facture : {{ $facture->getMontant() }} €
@endsection