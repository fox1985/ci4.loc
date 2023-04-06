<?php


namespace App\Controllers;

use App\Models\CountryModel;
use App\Models\TestModel;
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
        helper('form');

        $rules = [
            'name'  => 'required',
            'email' => 'valid_email',
        ];
        $data = ['title' => 'Тестовая форма для валидации'];

        if ($this->request->getMethod() == 'post') {
            if(!$this->validate($rules)){
                return redirect()->route('main_test')->withInput()->with('errors', $this->validator);
               
            }
            else{
                return redirect()->route('main_test')->with('success', 'От правлино письмо');
            }

    
        }
        return view('main/test', $data);
    }


    public function test2()
    {
        
        helper('form');

        $rules = [
            'name'  => 'required',
            'email' => 'valid_email',
        ];

        $data = ['title' => 'Тестовая форма для валидации 2'];

        if ($this->request->getMethod() == 'post') {
           $testModel = new TestModel();

           if(!$testModel->insert($this->request->getPost())){
                return redirect()->route('main_test2')->withInput()->with('errors', 
                $testModel->errors());
           }
           return redirect()->route('main_test2')->with('success', 'От правлино письмо');
    
        }
        return view('main/test2', $data);
    }


}
