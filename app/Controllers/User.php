<?php 

namespace App\Controllers;


class User extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

    public function register()
    {
        helper('form');

        return view('user/register', ['title' => 'Регистращия']);

    }

    public function store()
    {
        // проверка на валидацию
        if($this->validate('userRegister'))
        {
            if(!$this->userModel->insert($this->request->getPost()))
            {
                return redirect()->route('user.register')->withInput()->with('fail', 'Что-то не так' );
            }

        }

        else {
            return redirect()->route('user.register')->withInput()->with('errors', $this->validator->getErrors() );
        }

        return redirect()->route('user.register')->with('success', 'Вы зарегистрировны' );
        
    }

}


?>