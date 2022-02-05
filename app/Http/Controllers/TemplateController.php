<?php

namespace App\Http\Controllers;

use App\Models\Facade;
use App\Models\FactureLine;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TemplateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $facade = new Facade();
        $arrayFacade = $facade->commander();
        $concession = $arrayFacade[1];
        $voitures = $concession->getVoitures();
        return view('template', ["voitures" => $voitures ]);
    }
}
