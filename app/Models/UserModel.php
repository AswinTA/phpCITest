<?php namespace App\Models;
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'user';
     
    public function getUser($username = false)
    {
        if($username === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['username' => $username]);
        }   
    }
 
}