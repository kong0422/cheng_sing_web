<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        $this->data['news_list'] = $this->api->getNews();
        return view("{$this->template}/news", $this->data);
    }

    public function info($id)
    {
        $this->data['news'] = $this->api->getNewsById($id);
        $this->data['news_list'] = $this->api->getNews();
        $this->data['coupon_list'] = $this->api->getActivitySignUp($activities_class=2);
        $this->data['activity_list'] = $this->api->getActivitySignUp($activities_class=1);
        return view("{$this->template}/news_info", $this->data);
    }

}
