<?php

namespace App\classes;

class Front
{
    public function index()
    {
        header('Location: pages/action.php?status=index');
    }
}