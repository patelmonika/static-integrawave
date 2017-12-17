<?php
require_once "../Private/functions.php";




$response = getData('resumecategory',1);
foreach ($response as $cat){
    echo $response[name];
    var_dump($response);
}
?>

