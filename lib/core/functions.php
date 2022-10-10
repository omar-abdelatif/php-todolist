<?php
function redirect($path){
    header("location: $path");
}
function move_file($temp_name, $location, $avatar){
    $error = "error not found";
    if (move_uploaded_file($temp_name, $location)) {
        $location   = 'uploads/' . $avatar;
        $error = 'Error Uploading File';
        return $location;
    }
    return $error;
}
function updateImgPath($tmp_name, $path, $link){
    if (move_uploaded_file($tmp_name, $path)) {
        $link = 'uploads/' . $path;
        return $link;
    }
}
function search(){}