<?php

namespace App\Http\Controllers;

use App\Models\Observeur1;
use App\Models\Observeur2;
use App\Models\Sujet;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ObserverController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $sujet = new Sujet();
        $observeur1 = new Observeur1();
        $observeur2 = new Observeur2();
        $sujet->addObs($observeur1);
        $sujet->addObs($observeur2);
        return view('observer', ["sujet" => $sujet, "observeur1" => $observeur1, "observeur2" => $observeur2]);
    }
}
