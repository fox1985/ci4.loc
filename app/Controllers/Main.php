<?php


namespace App\Controllers;


class Main extends BaseController
{
    public function index()
    {


        $data = [
            'title' => 'Главная страница',

        ];


        return view('main/index', $data);



    }
}