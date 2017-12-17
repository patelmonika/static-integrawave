<?php
$response = getData('resumecategory',1);
foreach ($response as $cat){
    echo $cat[name];
    var_dump($response);
}
?>

