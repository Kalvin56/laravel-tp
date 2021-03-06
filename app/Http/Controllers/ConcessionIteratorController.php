<?php

namespace App\Http\Controllers;

use App\Models\Facade;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ConcessionIteratorController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $facade = new Facade();
        $arrayFacade = $facade->commander();
        $concession = $arrayFacade[1];
        return view('concession_iterator', ["concession" => $concession ]);
    }
}
