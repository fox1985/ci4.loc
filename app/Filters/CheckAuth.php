<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CheckAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
       if(!session()->has('name'))
       {
         return redirect('user.login');
       }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }



}