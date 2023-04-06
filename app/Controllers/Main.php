<?php


namespace App\Controllers;

use App\Models\CountryModel;
use Config\Database;

class Main extends BaseController
{

    private $db;

    public function __construct()
    {
        // //$this->db=Database::connect();
        // $this->db = db_connect('tests');

        $this->db = new CountryModel();
    }


    public function index()
    {
   

        $data = [
            'title' => 'Главная страница',

        ];
        return view('main/index', $data);

    }


    public function test()
    {
        $rules = [
            'name'  => 'required',
            'email' => 'valid_email',
        ];
        $data = ['title' => 'Тестовая форма для валидации'];

        if ($this->request->getMethod() == 'post') {
            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
               
            }
            else{
                echo "OK";
            }

            //d($this->request->getPost());
        }
        return view('main/test', $data);
    }


}