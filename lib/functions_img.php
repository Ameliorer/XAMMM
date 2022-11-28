<?php 
// Somes functions relate with the images


//Create a random name for a image
function createNewNameImg($imgName){
    //We keep the extention of the image
    $extention = getExtension($imgName);
    $newImgName = '';

    //We create a new name 
    $newName = getRandomStr();
    $newImgName = $newName;
    $newImgName .= $extention;

    return $newImgName;
}

//Return the extention of a image, raise an error if the image haven't one
function getExtension($imgName){
    $extention = '';

    //We search in the string where is the '.' ...
    for ($i = 0; $i <strlen($imgName); $i++){
        $caracter = $imgName[$i];

        //... and when we find it we retrieve the extension
        if ($caracter == '.'){
            for ($j = $i; $j < strlen($imgName); $j++){
                $extention .= $imgName[$j];
            }
        }
    }

    //If we cannot find the '.' we haven't extention so we raise an message
    if ($extention == ''){
        $res = "Etes-vous sûre d'avoir une extention pour cette image ?";
    }
    else{
        $res = $extention;
    }

    return $res;
}

//return a random string
function getRandomStr(){
    $random = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $n = strlen($random);

    $randomStr = '';
    for ($i = 0; $i < $n; $i++){
        $randomStr .= $random[rand(0, $n - 1)];
    }

    return utf8_encode($randomStr);
}


function img_is_existing($imgName,$allImgs){
    $res = false;
    for($i=0;$i<=(count($allImgs));$i++){
        if($allImgs[$i]["name"] == $imgName){
            $res = true;
        }
    }

    return $res;
}



?>