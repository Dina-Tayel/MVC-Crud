<?php
namespace Pure\Mvs\core;

class db{
    private $connection ;
    private $query;
    public function __construct()
    {
        $this->connection=mysqli_connect("localhost","root","","dinacrud");
    }
    // select 
    public function Select($column,$table){
       $this->query ="SELECT $column FROM `$table` ";
        return $this;
    }
    public function Where($column,$operator,$value){
        $this->query .= " WHERE `$column` $operator '$value' ";
        return $this;
    }
    public function andWhere($column,$operator,$value){
        $this->query .= " AND `$column` $operator '$value' ";
        return $this;
    }
    public function orWhere($column,$operator,$value){
        $this->query .= " OR `$column` $operator '$value' ";
        return $this;
    }

    public function GetRows(){
        $result=mysqli_query($this->connection,$this->query);
        if(is_object($result)){
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }else{
            return $this->showError();
        }
        // return(!empty($fetch) ? $fetch : [] ); 
    
    }

    public function GetRow(){
        $result=mysqli_query($this->connection,$this->query);
        if(is_object($result)){
        return mysqli_fetch_assoc($result);
        }else{
            return $this->showError();
        }
       

    }

    // delete
    public function Delete($table){
        $this->query="DELETE FROM `$table` " ;
        return $this;
    }
    public function excute(){
        $result=mysqli_query($this->connection,$this->query);
        return mysqli_affected_rows($this->connection);

    }

    // insert
    public function insert($table,$data){
        $columns = '';
        $values = '';
        foreach($data as $column=>$value){
            $columns .= "`$column`,";
            $values .= "'$value',";
        }
        $columns=rtrim($columns,',');
        $values=rtrim($values,',');
        $this->query="INSERT INTO `$table` ($columns) VALUES ($values) " ;
       return $this;
    }

    // update
     public function update($table,$data){
         $row = '';
         foreach($data as $column=>$value){
             $row .= "`$column`='$value'," ;
         }
         $row= rtrim($row,',');
         $this->query="UPDATE $table SET $row ";
         return $this;
        //  echo $this->query;die;
     }

     // join 
     public function join($type,$table,$primary,$foreign){
         $this->query .= " $type JOIN `$table` ON $primary = $foreign  ";
         return $this;
     }
     public function search($column,$keyword){
         $this->query.= " WHERE $column LIKE '%$keyword%'";
         return $this;
     }
     


     public function showError(){
        return mysqli_error_list($this->connection)[0]['error'];
     }
}


