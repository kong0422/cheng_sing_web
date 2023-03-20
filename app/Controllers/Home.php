<?php

namespace App\Controllers;


require_once(FCPATH . '../app/ThirdParty/php-json-ld/jsonld.php');

class Home extends BaseController
{
    public function index()
    {
        $this->data['home'] = $this->api->getDefault($this->website_url);
        // $this->data['jsonld'] = $this->_jsonld();
        // dd($this->data['jsonld']);
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
        // dd($this->data['home']['main']);

        return view("{$this->template}/home", $this->data);
    }

    private function _jsonld()
    {
        $doc = (object)array(
            "http://schema.org/name" => "Manu Sporny",
            "http://schema.org/url" => (object)array("@id" => "http://manu.sporny.org/"),
            "http://schema.org/image" => (object)array("@id" => "http://manu.sporny.org/images/manu.png")
        );

        $context = (object)array(
            "name" => $this->data['meta']['title'],
            "homepage" => (object)array("@id" => "http://schema.org/url", "@type" => "@Website"),
            "image" => (object)array("@id" => "http://schema.org/image", "@type" => "@id")
        );

        // compact a document according to a particular context
        // see: http://json-ld.org/spec/latest/json-ld/#compacted-document-form
        $compacted = jsonld_compact($doc, $context);

        return json_encode($compacted, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    public function privacy()
    {

        return view("{$this->template}/privacy", $this->data);
    }

}
