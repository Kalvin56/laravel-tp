@extends("base")

@section("content")
    <h1>Concession Iterator</h1>
    <?php 
        while($concessionIterator->hasNext()){
            $voiture = $concessionIterator->next();
            echo $voiture->getName();
        }
    ?>
@endsection