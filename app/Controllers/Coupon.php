<?php

namespace App\Controllers;

class Coupon extends BaseController
{
    public function index()
    {
        $this->data['coupon_list'] = $this->api->getCoupon();
        return view("{$this->template}/coupon", $this->data);
    }

}
