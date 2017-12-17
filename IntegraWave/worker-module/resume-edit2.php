<?php
require_once "../Private/functions.php";




$response = getAll('resumecategory');
foreach ($response as $cat){
    echo $response[name];echo "<br><br>";
var_dump($response);
}
?>

