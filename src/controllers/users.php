<?php 
namespace Pure\Mvs\controllers;

use Pure\Mvs\core\basecontroller;
use Pure\Mvs\models\usersModel;

class users extends basecontroller
{
    
    public function index(){
        
        $user=new usersModel;
        $users_data=$user->getAllUsers();
        $this->view("users/index",['rows'=>$users_data]);
    }

    public function create(){
        $this->view("users/create");
    }

    public function store(){
        if(isset($_POST['email']) & !empty($_POST['email'])){
            $user=new usersModel();
            $user->creatrNewUser("users",$_POST);
            header("location: index");
        
        }  else{
            header("location: index");  
        }
    }

    public function show($id){
        $user=new usersModel();
        $row=$user->showOneUser("users",$id);
        $this->view("users/show",['row'=>$row]);
        
    }
 
    public function edit($id){
        $user=new usersModel();
        $row=$user->showOneUser("users",$id);
        $this->view("users/edit",['row'=>$row]);
        
    }

    public function update(){
        $user=new usersModel();
        $data=$user->updateUser($_POST,$_POST['id']);
        header("location:index");

    }
 
    public function destroy($id){
        $user=new usersModel();
        $user->deleteUser("users",$id);
        header("location: ../index");
    }
    public function search(){
        $user=new usersModel();
        $rows=$user->searchByKeyword("users","username",$_POST['name']);
    //    print_r($rows);die;
        $this->view("users/index",['rows'=>$rows]);
    }

}