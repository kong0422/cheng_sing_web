<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $this->data['google_recaptcha_key'] = getenv('google_recaptcha_key');

        return view("{$this->template}/contact", $this->data);
    }

}
