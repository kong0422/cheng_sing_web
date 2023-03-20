<?php

namespace App\Controllers;

require_once(FCPATH . '../app/ThirdParty/php-json-ld/jsonld.php');

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

            // income
            $income_id = $this->session->get('income_id');
            $income_website = $this->session->get('income_website');
            if ($income_id && $income_website == $this->website_url) {
                $url = "https://ticket.cheng-sing.com/booking/cheng-sing/event/signup/64115ed43c5450bec16ed4e8-%E5%B0%8F%E5%AF%B6%E5%AF%B6%E7%88%AC%E8%A1%8C%E8%B3%BD?aaaa=bbb&ccc=111#222";
                // $u = parse_url($this->data['ticket_event_url']);
                $u = parse_url($url);

                $this->data['ticket_event_url'] = "{$u['scheme']}://{$u['host']}{$u['path']}";
                if (isset($u['query']) && $u['query']) {
                    parse_str($u['query'], $output);
                    $output['_'] = $income_id;
                    $this->data['ticket_event_url'] .= "?" . http_build_query($output);
                }
                if (isset($u['fragment']) && $u['fragment']) {
                    $this->data['ticket_event_url'] .= "#{$u['fragment']}";
                }
            }
        }
        // $this->data['jsonld'] = $this->_jsonld();
        // dd($this->data['jsonld'], $this->data);

        // $this->data['activity'] = $this->api->getActivityById($id);
        // $this->data['news_list'] = $this->api->getNews();
        // $this->data['coupon_list'] = $this->api->getActivitySignUp($activities_class=2);
        // $this->data['activity_list'] = $this->api->getActivitySignUp($activities_class=1);
        return view("{$this->template}/activity_info", $this->data);
    }

    private function _jsonld()
    {
        // {
        // "@context": "https://schema.org",
        // "@type": "ExhibitionEvent",
        // "location": "Victoria and Albert Museum",
        // "url": "http://www.vam.ac.uk/whatson/event/5150/shoes-pleasure-and-pain-696789408/",
        // "name": "Shoes: Pleasure and Pain",
        // "startDate": "2015-06-13",
        // "endDate": "2016-01-31",
        // "description": "Explore the transformative power of footwear from around the world as we present over 200 pairs of the most extreme shoes from the last 2000 years.",
        // "offers": [
        //         {"@type": "Offer",
        //         "@id": "http://www.vam.ac.uk/whatson/event/5150/date/20151007/"
        //     }
        // ]
        // }
        $doc = (object)array(
        "http://schema.org/name" => "Manu Sporny",
        "http://schema.org/url" => (object)array("@id" => "http://manu.sporny.org/"),
        "http://schema.org/image" => (object)array("@id" => "http://manu.sporny.org/images/manu.png")
        );

        $context = (object)array(
            "@context" => "http://schema.org/name",
            "@type" => "ExhibitionEvent",
            // 'location' =>
        );

        // compact a document according to a particular context
        // see: http://json-ld.org/spec/latest/json-ld/#compacted-document-form
        $compacted = jsonld_compact($context);

        return json_encode($compacted, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
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
