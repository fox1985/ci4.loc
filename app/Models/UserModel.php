<?php 

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
  
   protected $table = 'users';
   protected $primaryKey = 'id';
  
   protected $allowedFields = ['name', 'email', 'password', ];
   protected $useTimestamps = true;

   protected $beforeInsert = ['hashPassword'];

   protected function hashPassword(array $data)
   {
      // если пароль существует в базе
      if(isset($data['data']['password'])){
         $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
      }
      return $data;
   }
   
//    protected $useAutoIncrement = true;
   
//    protected $returnType = 'array';
//    protected $useSoftDeletes = false;
   

//    protected $createdField = 'created_at';
//    protected $updatedField = 'updated_at';
//    protected $useTimestamps = 'deleted_at';
   
//    protected $validationRules = [];
//    protected $validationMessages = [];
//    protected $skipValidation = false;
   

}
?>