<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$api = $_ENV['API_ENDPOINT'];
$status = false;
$url = "";
$err = true;

if (!empty($_POST['url'])) {
    $url = extractDouyinUrl($_POST['url']);
    $client = new Client();
    $response = $client->request('GET', $api . $url);
    $body = json_decode($response->getBody());
    if ($body->code == 0) {
        $title = $body->data->title;
        $image = $body->data->cover;
        $video = $body->data->play;
        $status = true;
    }
    if (!$status) {
        $err = false;
    }
}
function extractDouyinUrl($url)
{
    $pattern1 = '/https:\/\/v\.douyin\.com\/[a-zA-Z0-9]+/';
    $pattern2 = '/https:\/\/www\.tiktok\.com\/@tiktok\/video\/[0-9]+/';
    if (preg_match($pattern1, $url)) {
        preg_match($pattern1, $url, $matches);
        return $matches[0];
    }

    if (preg_match($pattern2, $url)) {
        preg_match($pattern2, $url, $matches);
        return $matches[0];
    }

    return false;
}

?>