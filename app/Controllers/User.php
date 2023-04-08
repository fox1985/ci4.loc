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
        // проверка афторизованого пользователя не пускает на форму регистрации 
        if(session()->has('name'))
        {
            return redirect('admin.main');
        }
        helper('form');
        return view('user/register', ['title' => 'Регистрация']);
    }

    public function store()
    {
        if ($this->validate('userRegister')) {
            if (!$this->userModel->insert($this->request->getPost())) {
                return redirect()->route('user.register')->withInput()->with('fail', 'Something wrong');
            }
        } else {
            return redirect()->route('user.register')->withInput()->with('errors', $this->validator->getErrors());
        }
        return redirect()->route('user.register')->with('success', 'Successfully registration');
    }

    public function login()
    {
        helper('form');

        if ($this->request->getMethod() == 'post') {
            // Validation
            if (!$this->validate('userLogin')) {
                return redirect()->route('user.login')->with('errors', $this->validator->getErrors());
            }

            // Get user
            $user = $this->userModel->where('email', $this->request->getPost('email'))->first();
            // If !user OR !checkPassword
            if (!$user || !$this->checkPassword($this->request->getPost('password'), $user['password'])) 
            {
                return redirect()->route('user.login')->with('fail', 'Incorrect email or password');
            }

            // If success validation AND login
            $this->setProfile($user);
            return redirect()->route('admin.main')->with('success', 'Success login');
        }

        return view('user/login', ['title' => 'Login']);
    }

    public function logout()
    {
        if (session()->has('name')) {
            session()->destroy();
        }
        return redirect('user.login');
    }

    private function checkPassword($data_password, $user_password)
    {
        return password_verify($data_password, $user_password);
    }

    private function setProfile($user)
    {
        $user_data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
        ];
        session()->set($user_data);
    }

}