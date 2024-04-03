<?php 
    namespace App;

    class Response{
        const NOT_FOUND = 404;
        const FORBIDDEN = 403;

        static function sendJson($data){
            header('Content-Type: application/json');
            echo json_encode($data,true);
        }

        static function sendError($message){
            $data=[
                'message'=>$message,
                'status'=>Response::NOT_FOUND
            ];
            header('Content-Type: application/json');
            echo json_encode($data,true);
        }
    }

