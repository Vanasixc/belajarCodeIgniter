<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Member extends BaseController
{
    public function getIndex()
    {
        return view('pages/Member');
    }
}   
