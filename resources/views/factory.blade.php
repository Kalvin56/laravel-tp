@extends("base")

@section("content")
    <h1>Factory</h1>
    {{ get_class($voiture1) }}
    <br>
    {{ get_class($voiture2) }}
@endsection