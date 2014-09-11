<?php
require_once dirname( __FILE__ ) . '/libs/Curl.class.php';
function getZodiacInfo($zodiac = "")
{
    $curl = curlClass::getInstance();
    $content = $curl->fetchURL("http://senviethoroscop.appspot.com/zodiac.json?zodiac=".$zodiac);
    return json_decode($content);
}