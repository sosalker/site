<?php
function curl($url)
{
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