<?php
require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
$response = getData('resumecategory',1);
foreach ($response as $cat){
    var_dump($response);
}
?>

