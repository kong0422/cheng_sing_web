<?php

namespace App\Controllers;

class Member extends BaseController
{
    public function index()
    {
        return view("{$this->template}/member", $this->data);
    }

}
