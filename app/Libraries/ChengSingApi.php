<?php

namespace App\Libraries;

class ChengSingApi
{
    private $debug = FALSE;
    private $api_url;
    private $website_url;


    public function __construct($config=[])
    {
        $this->api_url = $config['api_url'] ?? NULL;
        $this->website_url = $config['website_url'] ?? NULL;
    }

    private function set_response($response)
    {
        // $result = [
        //     'status' => FALSE,
        //     'data' => [],
        //     'message' => '',
        // ];

        $result = NULL;
        if ($response->getStatusCode() == 200) {
            // // Get a header line
            // echo $response->getHeaderLine('Content-Type');
            //
            // // Get all headers
            // foreach ($response->getHeaders() as $name => $value) {
            //     echo $name .': '. $response->getHeaderLine($name) ."\n";
            // }
            // $result['status'] = TRUE;
            // $result['data'] = $response->getBody();
            $result = $response->getBody();
            if (strpos($response->getHeader('content-type'), 'application/json') !== false) {
                $result = json_decode($result, TRUE);
            }
        }

        return $result;
    }

    public function request($method='GET', $action=NULL, $data=[], $headers=[])
    {
        $options = [
            'baseURI' => $this->api_url,
            'timeout'  => 5,
        ];
        $client = \Config\Services::curlrequest($options);

        $params = [
            // 'delay' => 2000,  //  發送前等待
            'headers' => array_merge([
                'Accept'     => 'application/json',
            ], $headers),
        ];
        if ($method == 'GET') {
            $params['query'] = $data;
        } else {
            $params['form_params'] = $data;
        }
        if ($this->debug) {
            dd($method, $action, $params);
        }

        try {
            $response = $client->request('GET', $action, $params);
        } catch (Exception $e) {
            echo "ChengSignApi {$method} {$action} exception: ",  $e->getMessage(), "\n";
        }

        return $this->set_response($response);
    }

    /**
     * 取得展覽首頁資料
     */
    public function getDefault()
    {
        $action = 'default';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得meta data
     */
    public function getSeo()
    {
        $action = 'seo';
        $data = [
            'url' => $this->website_url,
        ];
        $res = $this->request('GET', $action, $data);
        return $res['data'];
    }

    /**
     * 取得展覽資料
     */
    public function getExhibitionInfo()
    {
        $action = 'exhibitionInfo';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得頁面上方大圖
     */
    public function getCover()
    {
        $action = 'cover';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得最新消息清單
     */
    public function getNews()
    {
        $action = 'news';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得最新消息
     * params int $id
     */
    public function getNewsById($id)
    {
        $action = 'newsById';
        $data = [
            'url' => $this->website_url,
            'id' => $id
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得好康優惠清單
     */
    public function getCoupon()
    {
        $action = 'couponLists';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得好康優惠
     * params int $id
     */
    public function getCouponById($id)
    {
        $action = 'couponById';
        $data = [
            'url' => $this->website_url,
            'id' => $id
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得大會活動清單
     */
    public function getActivity()
    {
        $action = 'activity';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得大會活動清單(有上線的)
     * params int $activities_class 1 or 2
     */
    public function getActivitySignUp($activities_class=1)
    {
        $action = 'activitySignUp';
        $data = [
            'url' => $this->website_url,
            'activities_class' => $activities_class
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得活動
     * params int $id
     */
    public function getActivityById($id)
    {
        $action = 'activityById';
        $data = [
            'url' => $this->website_url,
            'id' => $id
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得大會活動清單 媽媽
     */
    public function getActivityMoms()
    {
        $action = 'moms';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得大會活動清單 寶寶
     */
    public function getActivityBabies()
    {
        $action = 'babies';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得活動場次
     * params int $id
     */
    public function getActivitySubById($id)
    {
        $action = 'act';
        $data = [
            'url' => $this->website_url,
            'id' => $id
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得參與廠商清單
     */
    public function getVendor()
    {
        $action = 'vendor';
        $data = [
            'url' => $this->website_url,
        ];
        return $this->request('GET', $action, $data);
    }

    /**
     * 取得參與廠商
     * params int $id
     */
    public function getVendorById($id)
    {
        $action = 'vendorById';
        $data = [
            'url' => $this->website_url,
            'id' => $id
        ];
        return $this->request('GET', $action, $data);
    }



    /**
     * 發送聯絡我們
     */
    public function postContact($data=[])
    {
        // axios.post(process.env.apiUrl+'contact', {
        //     google_recaptcha_token: vm.google_recaptcha_token,
        //     name: vm.name,
        //     sex: vm.sex,
        //     email: vm.email,
        //     phone: vm.phone,
        //     content: vm.content,
        //     url:process.env.webUrl
        // })
        $action = 'contact';
        $data = [
            'google_recaptcha_token' => $data['google_recaptcha_token'] ?? NULL,
            'name' => $data['name'] ?? NULL,
            'sex' => $data['sex'] ?? NULL,
            'email' => $data['email'] ?? NULL,
            'phone' => $data['phone'] ?? NULL,
            'content' => $data['content'] ?? NULL,
            'url' => $this->website_url,
        ];
        return $this->request('POST', $action, $data);
    }


}
