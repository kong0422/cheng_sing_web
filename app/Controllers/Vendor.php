<?php

namespace App\Controllers;

class Vendor extends BaseController
{
    public function index()
    {
        $this->data['vendor_list'] = $this->api->getVendor();
        return view("{$this->template}/vendor", $this->data);
    }

    public function info($id)
    {
        $this->data['vendor'] = $this->api->getVendorById($id);
        $this->data['vendor_list'] = $this->api->getVendor();
        return view("{$this->template}/vendor_info", $this->data);
    }


}
