<?php

namespace App\Models;

use CodeIgniter\Model;
use PHPUnit\Util\Xml\ValidationResult;

class TestModel extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email',];


  
    protected $validationRules = [
        //https://codeigniter.com/user_guide/libraries/validation.html
        'name' => 'required', 
        'email' => 'valid_email|is_unique[test.email]',
        
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'Извините. Это электронное письмо уже было отправлено. Пожалуйста, выберите другой ',
        ],
    ];

    //protected $validationMessages = [];
    //protected $skipValidation = false;
  
   
    
}





?>