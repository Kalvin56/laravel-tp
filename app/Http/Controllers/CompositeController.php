<?php

namespace App\Http\Controllers;

use App\Models\Leaf;
use App\Models\Composite;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CompositeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $tree = new Composite();
        $branch1 = new Composite();
        $branch1->add(new Leaf("Opel"));
        $branch2 = new Composite();
        $branch2->add(new Leaf("Renault"));
        $sous_branche1 = new Composite();
        $sous_branche1->add(new Leaf("V1-Opel", 10000));
        $sous_branche1->add(new Leaf("V2-Opel", 15000));
        $sous_branche2 = new Composite();
        $sous_branche2->add(new Leaf("V1-Renault", 30000));
        $sous_branche2->add(new Leaf("V2-Renault", 5000));
        $branch1->add($sous_branche1);
        $branch2->add($sous_branche2);
        $tree->add($branch1);
        $tree->add($branch2);
        return view('composite', ["tree" => $tree->operation() ]);
    }
}
