@extends("base")

@section("content")
    <h1>Strategy</h1>
    Voiture 1 (Renault) : TVA {{$factureLine->getTva()}} %
    <br>
    Voiture 2 (Opel) : TVA {{$factureLine2->getTva()}} %
@endsection