<?php

namespace App\Controllers;

class HomeController
{
    public function index($params = [])
    {
        echo view('Header');
        echo view('Home');
    }
}
