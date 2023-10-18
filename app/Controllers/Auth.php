<?php

namespace App\Controllers;
use App\Models\UserInfoModel;
use App\Models\UserDetailsModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function deleteuser(){
        // Check if the user_id exists in the session

        $user_id = session('user_id');
    
        if ($user_id) {
            // Create an instance of UserInfoModel
            $model = new UserInfoModel();
    
            // Delete the user with the specified 'id'
            $deleted = $model->where('id', $user_id)->delete();
    
            if ($deleted) {
                
                $data['deleted'] = TRUE;
                session()->remove('user_id');
                session()->remove('user_name');
                session()->remove('isLoggedIn');
                return redirect()->to('/auth/login');

            }else{
                return redirect()->to('/auth/login');
            }
        } else {
            return "User not authenticated.";
        }
    }
    
   

    public function dashboard(){
        $session=session();
        $user_id=session()->get('user_id');
        $model = new UserInfoModel();
        $model2 = new UserDetailsModel();
        $otherinfo = $model2->where('user_id', $user_id)->first();
        $user = $model->find($user_id);
        if ($user) {
            $userData = [
                'username' => $user['name'],
                'created_at' => $user['created_at'],
                'email' => $user['email'],
                'id' => $user['id'],
                'address' => $otherinfo['address'],
                'designation' => $otherinfo['designation'],
                'phone' => $otherinfo['phone'],
            ];
        return view('dashboard',$userData);
    }
}


    public function edit(){

        $session = session();
        $user_id = $session->get('user_id');
        // echo $user_id;die();
        $model = new UserDetailsModel();
        $userDetails = $model->where('user_id', $user_id)->first(); //this is the array of the row foreach laga sakte hain
        // echo var_dump($userDetails);die();
        if($this->request->getMethod() == 'post') {
            $newData = [
                'address' => $this->request->getVar('address'),
                'designation' => $this->request->getVar('designation'),
                'phone' => $this->request->getVar('phone'),
            ];
            $model->update($userDetails['id'], $newData);

            return redirect()->to('/auth/dashboard');
        }


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
                    return redirect()->to('/auth/dashboard');
                    $data['success'] = TRUE;
                    // echo session()->get('user_id');die();
                   
                    
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
    $data = [];
    helper('form');
    if ($this->request->getMethod() == 'post') {
        $rules = [
            'nameuser' => 'required|min_length[3]|max_length[30]',
            'email' => 'required|min_length[8]|max_length[50]|valid_email|is_unique[user_info.email]',
            'password' => 'required|min_length[4]|max_length[30]',
            'passwordconf' => 'matches[password]',
        ];
        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
        } else {
            $model = new UserInfoModel();
            $newData = [
                'name' => $this->request->getVar('nameuser'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ];
            if ($model->save($newData)) {
                $user_info_id = $model->getInsertID();

                $userDetailsModel = new UserDetailsModel();
                $userDetailsData = [
                    'user_id' => $user_info_id,
                    'address' => '',
                    'designation' => '',
                    'phone' => '',
                ];

                $userDetailsModel->save($userDetailsData);

                $data['Flash_message'] = true;
            }
        }
    }
    return view('registration', $data);
}

}
 