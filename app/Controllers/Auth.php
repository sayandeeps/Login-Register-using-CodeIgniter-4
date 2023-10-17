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

    public function register_user()
    {
        
        $validated = $this->validate([
                'name'=> 'required',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[5]|max_length[20]',
                'passwordConf'=> 'required|min_length[5]|max_length[20]|matches[password]'
             ]);
        if(!$validated){

            return view('registration', ['validation' => $this->validator]);

        }




    }



}
 