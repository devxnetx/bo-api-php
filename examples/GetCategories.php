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
$burziObiaviCategories = $burziObiavi->getNomenclatureService()->categories();

echo json_encode($burziObiaviCategories);
die;