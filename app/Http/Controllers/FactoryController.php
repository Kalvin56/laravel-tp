<?php

namespace App\Http\Controllers;

use App\Models\Usine;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FactoryController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $usine = new Usine();
        $voiture1 = $usine->fabriquer('Renault');
        $voiture2 = $usine->fabriquer('Opel');
        return view('factory', ["voiture1" => $voiture1, "voiture2" => $voiture2]);
    }
}
