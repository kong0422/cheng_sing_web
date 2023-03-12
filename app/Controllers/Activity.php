<?php

namespace App\Controllers;

class Activity extends BaseController
{
    public function index()
    {
        $this->data['activity_list']['moms'] = $this->api->getActivityMoms();
        $this->data['activity_list']['babies'] = $this->api->getActivityBabies();

        return view("{$this->template}/activity", $this->data);
    }

    public function info($id)
    {
        $res = $this->api->getActivitySubById($id);
        $this->data['activity'] = $res['lists'];
        $this->data['activity_sub_list'] = $res['subLists'];
        $this->data['activity_list'] = $res['activityLists'];
        $this->data['news_list'] = $res['newsLists'];
        $this->data['coupon_list'] = $res['couponLists'];

        // set signup url
        $this->data['ticket_event_url'] = NULL;
        if (isset($this->data['activity']['ticket_event_url'])
            && $this->data['activity']['ticket_event_url']
            && $this->data['activity']['ticket_event_url'] !='undefined')
        {
            $this->data['ticket_event_url'] = $this->data['activity']['ticket_event_url'];
        }

        // $this->data['activity'] = $this->api->getActivityById($id);
        // $this->data['news_list'] = $this->api->getNews();
        // $this->data['coupon_list'] = $this->api->getActivitySignUp($activities_class=2);
        // $this->data['activity_list'] = $this->api->getActivitySignUp($activities_class=1);
        return view("{$this->template}/activity_info", $this->data);
    }

    // public function step1($id)
    // {
    //     $this->data['activity'] = $this->api->getActivityById($id);
    //     $this->data['news_list'] = $this->api->getNews();
    //     $this->data['coupon_list'] = $this->api->getCoupon();
    //     $this->data['activity_list'] = $this->api->getActivity();
    //     return view('activity_step1', $this->data);
    // }
    //
    // public function step2($id)
    // {
    //     $this->data['news_list'] = $this->api->getNews();
    //     $this->data['coupon_list'] = $this->api->getCoupon();
    //     $this->data['activity_list'] = $this->api->getActivity();
    //     return view('activity_step2', $this->data);
    // }
}
