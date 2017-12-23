<?php

function url_for($script_path){
    if($script_path[0] != '/'){
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function getPreUrl(){
    $preUrl = "http://localhost:8090/";
    return $preUrl;
}

function requestOperation($controller, $data){

    $action = $data['action'];

    switch ($action){
        case "add":
            unset($data['action']);
            unset($data['id']);
            $requestStatus = insertData($controller, $data);
            break;
        case "delete":
            $param = $data['id'];
            unset($data['action']);
            unset($data['id']);
            $requestStatus = deleteData($controller,$param);
            break;
        case "edit":
            $param = $data['id'];
            unset($data['action']);
            unset($data['id']);
            $requestStatus = getData($controller,$param);
            break;
        case "update":
            $param = $data['id'];
            unset($data['action']);
            unset($data['id']);
            $requestStatus = updateData($controller, $param, $data);
            break;
        case "login":
            unset($data['action']);
            $requestStatus = getLoginStatus($controller,$data);
            break;
        case "reset":
            unset($data['action']);
            $requestStatus = resetPassword($controller, $data);
            break;
        case "updatePassword":
            unset($data['action']);
            $requestStatus = updatePassword($controller, $data);
            break;
        default:
            break;
    }

    return $requestStatus;
}

function insertData($controller, $data){

	$url = "http://localhost/php-integrawave/web-api/public/$controller";
	$url = "http://php-integrawave.azurewebsites.net/$controller";
    $url = getPreUrl() . "php-integrawave/web-api/public/$controller";
    $data_str = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_str);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function deleteData($controller,$param){
	$url = "http://localhost/php-integrawave/web-api/public/$controller/$param";
    $url = "http://php-integrawave.azurewebsites.net/$controller/$param";
    $url = "php-integrawave/web-api/public/$controller/$param";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function updateData($controller, $param, $data){
	$url = "http://localhost/php-integrawave/web-api/public/$controller/$param";
    $url = "http://php-integrawave.azurewebsites.net/$controller/$param";
    $url = getPreUrl() . "php-integrawave/web-api/public/$controller/$param";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function getAll($controller){
	$url = "http://localhost/php-integrawave/web-api/public/$controller";
    $url = "http://php-integrawave.azurewebsites.net/$controller";
    $url = getPreUrl() . "php-integrawave/web-api/public/$controller";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $request = curl_exec($ch);
    curl_close($ch);

    $assoc = true;
    $response = json_decode($request, $assoc);

    return $response;
}

function getData($controller,$param){
	$url = "http://localhost/php-integrawave/web-api/public/$controller/$param";
    $url = "http://php-integrawave.azurewebsites.net/$controller/$param";
    $url = getPreUrl() . "php-integrawave/web-api/public/$controller/$param";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $request = curl_exec($ch);
    curl_close($ch);

    $assoc = true;
    $response = json_decode($request, $assoc);

    return $response[0];
}

function getLoginStatus($controller,$data){
	$url = "http://localhost/php-integrawave/web-api/public/$controller";
    $url = "http://php-integrawave.azurewebsites.net/$controller";
    $url = getPreUrl() . "php-integrawave/web-api/public/$controller";
    $data_str = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_str);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function resetPassword($controller, $data){
	$url = "http://localhost/php-integrawave/web-api/public/$controller";
	$url = "http://php-integrawave.azurewebsites.net/$controller";
    $url = getPreUrl() . "php-integrawave/web-api/public/$controller";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $url . http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function updatePassword($controller, $data){
	$url = "http://localhost/php-integrawave/web-api/public/$controller";
	$url = "http://php-integrawave.azurewebsites.net/$controller";
    $url = getPreUrl() . "php-integrawave/web-api/public/$controller";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $url . http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function uploadImage($actionType){
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFilePath = $_SERVER["REQUEST_SCHEME"] ."://". $_SERVER['HTTP_HOST']."/Bhatku/public/" . $target_file;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    //if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    //}
    // Check if file already exists
    if (file_exists($target_file)) {
        if($actionType == "Update"){
            unlink($target_file);
            $uploadOk = 1;
        }
        else{
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    }
    // Check file size
    if ($_FILES["image"]["size"] > 800000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    return $imageFilePath;
}

?>