<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Main extends  BaseController
{
    public function  index()
    { 
    //Проверка авторизовоный ли пользователь
    //    if(!$this->checkAdmin())
    //    {
    //     return redirect('user.login');
    //    } 
    
      return view('admin/main/index', ['title' => 'Admin Main']);
    }


    public function  test()
    {
      
        return view('admin/main/test', ['title' => 'Admin test']);
    }

    private function checkAdmin()
    {
        return session()->has('name');
    }

}