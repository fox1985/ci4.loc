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


    public function fileUpload()
    {
        // Загруска файла через форму
       if ($this->request->getMethod() == 'post') {
        $file = $this->request->getFile('userfile');
        
        if ($file->isValid() && !$file->hasMoved()){
            // $f = $file->store();
            // d($f);

            $f = date("Ymd");
            if ($file->move("uploads/{$f}", $n= $file->getRandomName())) {
                session()->setFlashdata('file', "{$f}/$n");
                return redirect()->route('main.fileupload')->with('success', 'Файл загружин');
            
            }

        }
        // d($file->getName());
        // d($file->getClientName());
        
       }
        return view('main/file-upload', ['title' => 'File upload']);
    }



    public function fileUpload2()
    {
        helper('form');
        
        $rules = [
            'name'  => 'required',
            'email' => 'valid_email',
            'userfile' => 'uploaded[userfile]'
        ];

        // Загруска файла через форму
       if ($this->request->getMethod() == 'post') {
        $file = $this->request->getFile('userfile');
        
        //если прошла валидация 
        if($this->validate($rules))
        {
            if ($file->isValid() && !$file->hasMoved())
            {
                $f = date("Ymd");
                if ($file->move("uploads/{$f}", $n= $file->getRandomName())) {
                    session()->setFlashdata('file', "{$f}/$n");
                    return redirect()->route('main.fileupload2')->with('success', 'Файл загружин');
                
                }
    
            }
           

        }
        else {
              redirect()->route('main.fileupload2')->with('errors', $this->validator->getErrors());
            }
        
       }
        return view('main/file-upload2', ['title' => 'File upload2']);
    }





    public function fileUpload3()
    {
        // мульти загрузка 
        helper('form');
        $rules = [
            'name' => 'required',
            'email' => 'valid_email',
            'userfile' => 'uploaded[userfile.0]|max_size[userfile,1024]|ext_in[userfile,png,jpg,gif]',
        ];

        if ($this->request->getMethod() == 'post') {

            if ($this->validate($rules)) {
                $files = $this->request->getFiles();
                $names = [];

                foreach ($files['userfile'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $f = date("Ymd");
                        if ($file->move("uploads/{$f}", $n = $file->getRandomName())) {
                            $names[] = "{$f}/$n";
                        } else {
                            return redirect()->route('main.fileupload3')->with('errors', ['Error moved file']);
                        }
                    }
                }

            } else {
                return redirect()->route('main.fileupload3')->withInput()->with('errors', $this->validator->getErrors());
            }

            session()->setFlashdata('files', $names);
            return redirect()->route('main.fileupload3')->with('success', 'Success');

        }

        return view('main/file-upload3', ['title' => 'File upload 3']);
    }


}
