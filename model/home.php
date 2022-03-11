<?php

class homeModel{

    function __construct(){
        try{
            $this->con = new PDO("mysql:host=localhost;dbname=mvc_framework", "root", "");
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function page($id){
        $sql = "select * from users where id=".$id;
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $arr = [
        //     'title'=>'home',
        //     'data'=>'home data'
        // ];
        $arr = $data[0];
        return $arr;
    }
}

?>