<?php

namespace App\Controllers;
use App\Models\UserInfoModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{


    public function dashboard(){
        return view('dashboard');
    }



    public function login()
    {
       
        $data=[];
        helper('form');
        if($this->request->getMethod()=='post'){
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required',

            ];
            if($this->validate($rules)){
                $model = new UserInfoModel();
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $user=$model->where('email',$email)->first();

                if($user && password_verify($password,$user['password'])){
                    $this->setSession($user);
                    // return redirect()->to('/auth/dashboard');
                    $data['success'] = TRUE;
                   
                    
                }else{
                    $data['error'] = TRUE;
                }
            }else{
                $data['validation'] = $this->validator;
            }
        }
        return view('welcome_message',$data);
    }

    private function setSession($user)
    {
        $session = session();
        $session->set('user_id', $user['id']);
        $session->set('user_name', $user['name']);
        $session->set('isLoggedIn', true);

    }

    public function logout()
{
    $session = session();
    $session->remove('user_id');
    $session->remove('user_name');
    $session->remove('isLoggedIn');

    return redirect()->to('/auth/login'); 
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
 