<?php

namespace App\Http\Controllers;

use App\Models\Facade;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FacadeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $facade = new Facade();
        $arrayFacade = $facade->commander();
        return view('facade', ["arrayFacade" => $arrayFacade]);
    }
}
