<?php

if(!empty($_GET['ref'])) {
    $file = './data/refs.json';

    if(!file_exists($file)) {
        mkdir(dirname($file), 0777, true);
        file_put_contents($file, json_encode((object)[]));
        error_log("Created new file '$file'");
    }

    $ref = $_GET['ref'];
    $data = json_decode(file_get_contents($file));
    if(empty($data->$ref)) {
        $data->$ref = 1;
    } else {
        $data->$ref += 1;
    }

    file_put_contents($file, json_encode($data));
    error_log("URL with ref '$ref', logging to '$file', redirecting to original page");
    header('Location: '.parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)); // redirect to original page without ref
}

?>