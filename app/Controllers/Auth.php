<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        echo "Login done";
    }
    public function register()
    {
        return view('registration');
    }
}
 