<?php

namespace App\Http\Controllers;

use App\Models\Facade;
use App\Models\FactureLine;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StrategyController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $facade = new Facade();
        $arrayFacade = $facade->commander();
        $concession = $arrayFacade[1];
        $voitures = $concession->getVoitures();
        $factureLine = new FactureLine($voitures[0]);
        $factureLine2 = new FactureLine($voitures[1]);
        return view('strategy', ["factureLine" => $factureLine, "factureLine2" => $factureLine2 ]);
    }
}
