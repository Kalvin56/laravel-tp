@extends("base")

@section("content")
    <h1>Concession Iterator</h1>
    <?php
        $iterator = $concession->getIterator();
        while($iterator->hasNext()){
            $voiture = $iterator->current();
            echo $voiture->getName(). "\n";
            $iterator->next();
        }
    ?>
@endsection