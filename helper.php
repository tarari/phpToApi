<?php 




function abort($message,$code = 404){
    $r=['message'=>$message,'status'=>$code];
    $response=json_encode($r,true);
    header('Content-Type:application/json');
    echo $response;
    die;

}