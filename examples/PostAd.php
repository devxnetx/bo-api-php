<?php
/**
 * @author devxnet
 * @date   2023-08-19 17:27:56
 * @file   GetCities.php
 *
 * Do not modify this code on your own, as it may lead to unexpected outcomes.
 * We do not take responsibility for any issues that may arise from unauthorized changes.
 * For inquiries about modifications, please contact devxnetx@gmail.com.
 */

include '../vendor/autoload.php';

use Devxnet\BoApiPhp\BurziObiavi;


$burziObiavi = new BurziObiavi('zgdevv', '123123123');
$burziObiaviPostAdResponse = $burziObiavi->getAdService()->postAd([
    "title"         => "Your Ad Title - Не приема HTML",
    "content"       => "<b>DESCRIPTION</b>",
    "price"         => "100",
    "phone"         => "0888888888",
    "city"          => 727011,
    "username"      => "YOUR USERNAME",
    "password"      => "YOUR ACCOUNT PASSWORD",
    "catid"         => 11,
    "subcatid"      => 181,
    "api_custom_id" => "ID from your system",
    "images"        => ["https://cdn.shopify.com/s/files/1/2394/4001/files/21_MAYO_e83d41cd-e674-4508-8d9a-267075361e02_480x480.jpg"]
]);

echo json_encode($burziObiaviPostAdResponse);
die;