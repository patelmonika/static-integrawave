<?php
require_once "../Private/functions.php";




$response = getData('resumecategory',1);
foreach ($response as $cat){
    echo $cat[name];

}
echo "<br><br>";
var_dump($response);
?>

