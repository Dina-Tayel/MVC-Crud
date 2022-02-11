<?php 

namespace Pure\Mvs\models;

use Pure\Mvs\core\db;

class usersModel extends db{
     public function getAllUsers(){
         return $this->Select("*","users")->GetRows();
     }
    
     public function creatrNewUser($table,$data){
         return $this->insert($table,$data)->excute();
     }

     public function showOneUser($table,$id){
         return $this->Select("*",$table)->Where("id","=","$id")->GetRow();
     }

     public function updateUser($data, $id)
     {
         return $this->update("users", $data)->where("id", "=", $id)->excute();
     }
     public function deleteUser($table,$id){
        return $this->Delete($table)->Where("id","=",$id)->excute();
     }
     public function searchByKeyword($table,$column, $keyword){
        return $this->Select("*",$table)->search($column, $keyword)->GetRows();
     }
 }