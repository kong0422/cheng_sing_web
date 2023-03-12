<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {

        return view("{$this->template}/faq", $this->data);
    }

}
