<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Libraries\ChengSingApi;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['array', 'cookie', 'text', 'url', 'html', 'common'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    protected $session;

    protected $locations = [
        "11" => "台北世貿一館",
        "12" => "圓山爭艷館",
        "13" => "新竹市立體育館",
        "21" => "臺中國際展覽館",
        "22" => "新竹市立體育館",
        "31" => "台南南紡世貿展覽中心",
        "32" => "高雄國際會議中心",
    ];


    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        $response->setHeader('Content-type', 'text/html');
        $response->setHeader('P3P', 'CP=CAO PSA OUR');
        $response->setHeader('Set-Cookie', 'SameSite=None; Secure');

        // Preload any models, libraries, etc, here.

        $this->session = \Config\Services::session();
        $this->request = $request;

        // $this->db = db_connect('default');

        $this->website_url = "https://{$_SERVER['HTTP_HOST']}/";
        if (getenv('CI_ENVIRONMENT') == 'development') {
            // $this->website_url = 'https://babymama-txg.cheng-sing.com/';
            // $this->website_url = 'https://travel.cheng-sing.com/';
            $this->website_url = 'https://babymama-tnn.cheng-sing.com/';
            // $this->website_url = 'https://demo.cheng-sing.com/';
            $this->website_url = 'https://hsinchu-travel.cheng-sing.com';
        }

        $this->ticket_member_url = getenv('app.TicketMemberUrl');
        $this->api_url = getenv('app.ApiURL');
        $this->storage_url = getenv('app.ApiStorageUrl');

        $this->current_url = current_url();
        // $this->img_url = '/assets/img/' . get_sub_domain($this->website_url) . '/';
        //

        $this->api = new ChengSingApi([
            'api_url' => $this->api_url,
            'website_url' => $this->website_url,
        ]);

        $this->exhibition = $this->api->getExhibitionInfo();
        $this->exhibition['exhibition_location'] = @$this->locations[$this->exhibition['exhibition_classes_area'].$this->exhibition['exhibition_classes_location']];

        $this->template = 'default';
        if ($this->exhibition['exhibition_classes_template'] && $this->exhibition['exhibition_classes_template'] != 'null') {
            $this->template = $this->exhibition['exhibition_classes_template'];
        }

        $seo = $this->api->getSeo();
        $cover = $this->api->getCover();
        $cover_pic = '';
        $cover_mpic = '';
        if ($cover) {
            $cover_pic = "{$this->storage_url}pic/{$cover['pic']}";
            $cover_mpic = "{$this->storage_url}pic/{$cover['mpic']}";
        }


        // income
        if ($this->request->getGet('_')) {
            $this->session->set('income_id', $this->request->getGet('_'));
            $this->session->set('income_website', $this->website_url);
        }

        $this->data = [
            'website_url' => $this->website_url,
            'current_url' => $this->current_url,
            'storage_url' => $this->storage_url,
            // 'img_url' => $this->img_url,
            'api_url' => $this->api_url,
            'ticket_member_url' => $this->ticket_member_url,
            'meta' => [
                'title' => $seo['exhibitions_name'],
                'description' => $seo['exhibition_classes_description'],
                'keywords' => $seo['exhibition_classes_keyword'],
            ],
            'exhibition' => $this->exhibition,
            'template' => $this->template,
            'jsonld' => NULL,
            'locations' => $this->locations,
            'cover_pic' => $cover_pic,
            'cover_mpic' => $cover_mpic,
        ];
    }

    public function sentMail()
    {
        $email = \Config\Services::email();

        $email->setFrom('your@example.com', 'Your Name');
        $email->setTo('someone@example.com');
        $email->setCC('another@another-example.com');
        $email->setBCC('them@their-example.com');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        $email->send();
    }

}
