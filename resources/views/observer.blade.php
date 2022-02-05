@extends("base")

@section("content")
    <h1>Observeur</h1>
    {{$observeur1->display()}}
    <br>
    {{$observeur2->display()}}
    <br>
    {{$sujet->notify()}}
    <br>
    {{$observeur1->display()}}
    <br>
    {{$observeur2->display()}}
@endsection