<?php 
    namespace App\Controllers;

    use App\Kernel;
    use App\Database;

    use App\Models\User;
    use App\Request;
    use App\Response;

    class UserController{

        function index(){
            $db=Kernel::resolve('db');
            $users=$db->query('SELECT * FROM users')->get();
            if ($users){
                Response::sendJson($users);
            }else{
                Response::sendError("No data available");
            }
        
        }
        function update($data){
            $arrayData=json_decode($data,true);
            // Validar los datos del usuario
            $user = User::update($arrayData);
            
        }
        function store($data){ 
            $arrayData=json_decode($data,true);
            // Validar los datos del usuario
            $user = User::create($arrayData);
            // Crear un nuevo usuario en la base de datos
            if($user){
                $message="User created";
                $status=201;
            }else{
                abort("Error creating user");
                
            }
            $r=['message'=>$message,'status'=>$status];
            $response=json_encode($r,true);
            header('Content-Type:application/json');
            echo $response;
        }

        function show($id){
            $db=Kernel::resolve('db');
            $users=$db->query("SELECT * FROM users where id=:id",[':id'=>$id])->get();
            if($users){
                Response::sendJson($users);
            }else{
                Response::sendError("No data available");
            }
            
        }
        function destroy($data){
            
            $db=Kernel::resolve('db');
            $res=$db->query("DELETE FROM users where id=:id",[':id'=>$data['id']]);
            if($res){
                Response::sendJson([
                    'message'=>"User deleted",
                    'status'=>200
                ]);
                
            }else{
                Response::sendError("Error deleting");
            }
            
        }

    }