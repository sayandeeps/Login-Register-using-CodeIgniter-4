<?php

namespace App\Controllers;
use App\Models\UserInfoModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{




    public function index()
    {
        echo "Login done";
    }
    public function register()
    {
        $data=[];
        helper('form');
        if($this->request->getMethod()=='post'){
            
            $rules = [
                'nameuser' => 'required|min_length[3]|max_length[30]',
                'email' => 'required|min_length[8]|max_length[50]|valid_email|is_unique[user_info.email]',
                'password' => 'required|min_length[4]|max_length[30]',
                'passwordconf' => 'matches[password]',


            ];
            if (!$this->validate($rules)){
                $data['validation'] = $this->validator;

            }else{
                // echo 111;exit;

                $model = new UserInfoModel();
                $newData=array(
                    'name' => $this->request->getVar('nameuser'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),

                );
                if($model->save($newData)){
                    $data['Flash_message'] = TRUE;

                }

            }
            // echo 111;exit;

        }


        return view('registration',$data);
        // return view('registration');
    }
}
 