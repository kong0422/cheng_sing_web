<?php

namespace App\Controllers;

class Exhibition extends BaseController
{
    public function index()
    {
        return view("{$this->template}/exhibition", $this->data);
    }

}
