@extends("base")

@section("content")
    <h1>Singleton</h1>
    {{ $a->increment() }}
    {{ $b->increment() }}
    {{ $a->increment() }}
@endsection