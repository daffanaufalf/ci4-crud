<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Hello extends BaseController
{
    public function index()
    {
        echo "Hello selamat datang!";
    }
    public function about()
    {
        // echo "Halo nama saya Ilham God";
        echo "Halo nama saya $this->nama";
    }
    public function profile1($param1)
    {
        echo "Halo nama saya adalah $param1";
    }
    public function profile2($param1, $param2)
    {
        echo "Halo nama saya adalah $param1 umur $param2";
    }
}
