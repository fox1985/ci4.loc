<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends  BaseController
{
    public function  getUsers()
    {
        echo "<h1>Список пользователей</h1>";
    }


    public function  getUser($user)
    {
        echo "<h1>Пользователь:{$user}</h1>";
    }


    public function  create()
    {
        echo "<h1>Form</h1>";
        ?>
        <form action="/admin/user/save" method="post">
            <input type="text" name="name">
            <button type="submit">Save</button>
        </form>
        <?php
    }

    public function save()
    {
        echo "<h1>Save</h1>";
        var_dump($_POST);
    }


}