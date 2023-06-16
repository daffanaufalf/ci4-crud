<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo 'ini adalah controller home class index';
    }
    public function coba()
    {
        echo "Halo nama saya $this->nama";
        echo "<br> ini dari function coba";
    }
}
