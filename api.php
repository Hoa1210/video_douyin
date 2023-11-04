<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$api = $_ENV['API_ENDPOINT'];
$status = false;
$url = "";
$err = true;

if (isset($_POST['url']) && $_POST['url'] != '') {
    $url = $_POST['url'];
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
}else{
    $err = false;
}

?>