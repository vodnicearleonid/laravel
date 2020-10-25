<?php


namespace app\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as ControllerLaravel;

class Controller extends ControllerLaravel
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
