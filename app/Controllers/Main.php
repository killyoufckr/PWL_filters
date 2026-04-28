<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index($name = null)
    {
     $text = "hwl";
     if(is_null ($name))
     {
        $text .= $name;
     }
    echo $text;

    function angka ($angka)
    {
        return $angka*$angka;
    }
    }
}
