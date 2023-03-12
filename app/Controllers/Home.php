<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data['home'] = $this->api->getDefault($this->website_url);
// banner => array (1)
// main => array (1)
// dividePic => array (6)
// activity => array (14)
// news => array (2)
// moms => array (6)
// babies => array (7)
// ticketIndex => array (6)
// popup => array (7)
// vendor => array (5)
// exhibitions => array (6)
        // dd($this->data['home']['popup']);

        return view("{$this->template}/home", $this->data);
    }

    public function dev()
    {
        $website = base_url();
        $website = 'https://babymama-txg.cheng-sing.com';
        $data = $this->api->getWebsiteHome($website);
        dd($data);

    }
    public function privacy()
    {

        return view("{$this->template}/privacy", $this->data);
    }

}
