<?php
namespace App\Models;
use CodeIgniter\Model;
class UserInfoModel extends Model{
    protected $table = 'user_info';
    protected $allowedFields = ['id' , 'name', 'email' ,'password', 'created_at' , 'updated_at' ];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    protected $primaryKey = 'id';



    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
        $data['data']['created_at'] = date('Y-m-d H:i:s');

        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);
        $data['data']['updated_at'] = date('Y-m-d H:i:s');

        return $data;
    }

    protected function passwordHash(array $data){
        
        if(isset($data['data']['password'])){
            $data['data']['password'] = password_hash($data['data']['password'] , PASSWORD_DEFAULT);
        }


        return $data;
    }







}
