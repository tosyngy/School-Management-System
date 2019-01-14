<?php

class database extends PDO {

    function __construct() {
        parent::__construct("mysql:host=localhost;dbname=skulold", "root", "");
    }

    function select($query, $array = array()) {
        $con = $this->prepare($query);

        foreach ($array as $key => $value) {
            $con->bindValue($key, $value);
        }
        $con->execute();
        return $con->fetchAll(PDO::FETCH_ASSOC);
    }

//    function update($table, $array, $ref) {
//   $field=NULL;
//   foreach ($array as $key => $value) {
//    $field.="`$key`=:$key,";
//} 
//$fieldfin=  rtrim($field,",");
//  //echo $field;
//   $myquery= "update $table set $fieldfin where id =$ref";
//   $con=  $this->prepare($myquery);
//   foreach ($array as $key => $value) {
//       $con->bindValue($key, $value);
//   }
//   $con->execute();
////   echo $myquery. "is successfull";
//    }


    public function update($table, $data, $where) {
        ksort($data);
        $fieldDetails = NULL;
        foreach ($data as $key => $value) {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
//        print("UPDATE $table SET $fieldDetails WHERE $where");
        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
//            print($value);
        }
        $sth->execute();
    }

    function delete($table, $ref) {
        
    }

    function insert($table, $array) {
        //$array=array("name"=>"testing", "age"=>"150","dept"=>"comp","marital_status"=>"complicated");
        $key = array_keys($array);
//print_r($key);
        $ope = implode("`,`", $key);
        $yemi = "`" . $ope . "`";
        $ola = implode(",:", $key);
        $mide = ":" . $ola;
        //echo $mide;
        $wuraola = "insert into $table ($yemi) values($mide)";
//   echo $wuraola;
        $con = $this->prepare($wuraola);
        foreach ($array as $key => $value) {
            $con->bindValue($key, $value);
        }
        $con->execute();
        return $id = $this->select("select id from $table order by id DESC LIMIT 1 ");
//        echo($con->execute());
//        echo "successful";
    }

    function e($q) {
        $this->exec($q);
    }
}
