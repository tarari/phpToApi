<?php

    namespace App\Models;

    use App\Kernel;

    class User{

        static function create(array $data){
            
            $db=Kernel::resolve('db');
            $userStmt=$db->query('INSERT INTO users(name) VALUES(:name)',[':name'=>$data['name']]);
            return $userStmt;

        }

        static function update(array $data){
            $db=Kernel::resolve('db');
            $userStmt=$db->query('UPDATE  users SET ',[':name'=>$data['name']]);
            return $userStmt;
        }
        
    }