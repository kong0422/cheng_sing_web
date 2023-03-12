<?php

if (! function_exists('get_sub_domain')) {
    /**
     * Searches an array through dot syntax. Supports
     * wildcard searches, like foo.*.bar
     *
     * @return array|bool|int|object|string|null
     */
    function get_sub_domain($url)
    {
        $domain = parse_url($url, PHP_URL_HOST);
        $sub = explode('.', $domain)[0];
        return $sub;
    }
}

if (! function_exists('valify_format')) {
    /**
     * Searches an array through dot syntax. Supports
     * wildcard searches, like foo.*.bar
     *
     * @return bool
     */
    function valify_format($type=NULL, $str='')
    {
        if ($type && $str) {
            switch ($type) {
                case 'url':
                    if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $str))
                        return TRUE;
                    break;

                case 'email':
                    if (preg_match("/([\w\-\.]+\@[\w\-]+\.[\w\-]+)/", $str))
                        return TRUE;
                    break;
            }
        }
        return FALSE;
    }
}
