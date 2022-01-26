<?php

namespace App\Http\Controllers;

use App\Models\Singleton;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SingletonController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        return view('singleton', ["a" => $a, "b" => $b]);
    }
}
