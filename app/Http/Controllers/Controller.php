<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
<<<<<<< HEAD
    //this is iqbal edited file
    //please approve this
    //another change
    //ksldjf
=======

    public function anything()
    {
        die('this is just for test');
        # code...
    }
>>>>>>> 65cf40322dc73cf9fd6f71dee799d9fa31a50e66
}


