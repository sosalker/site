<?php

function curl($url){
    $ch = curl_init();
    $opt = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
    );
    curl_setopt_array($ch, $opt);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

require_once "simple_html_dom.php";

$html = file_get_html("codecademy.namecheap.com");
foreach ($html->find("div") as $element) {
    print_r($element);
}