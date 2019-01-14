<?php

$query = "";
if (isset($_POST["cls"])) {
    $my_item = array();
    $my_sub = array(
        "english",
        "maths",
        "yoruba",
        "chemistry",
        "biology",
        "physics",
        "geography",
        "economic",
        "futher maths"
    );
    $my_stud = array(
        "tolux micheal" => "00000000001",
        "tolux aina" => "00000000002",
        "aina dada" => "00000000003",
        "adio segun" => "00000000004",
        "segun adio" => "00000000005",
        "michael ola" => "00000000006",
        "ola michael" => "00000000007",
        "bola dada" => "00000000008",
        "bolu adio" => "00000000009",
        "seye keke" => "00000000010"
    );
     array_push($my_item, $my_sub);
     array_push($my_item, $my_stud);
     echo json_encode($my_item);
     return;
}

foreach ($_POST as $key => $value) {
    $query.="insert into table (";
    foreach ($value as $key2 => $data) {
        foreach ($data as $key3 => $data2) {
            if ($key2 == '0') {
                $query.= "`" . $key3 . "`,";
            }
        }
        if ($key2 == '0') {
            $query = substr($query, 0, strlen($query) - 1) . ") values(";
        } else {
            $query = substr($query, 0, strlen($query) - 1) . ") , (";
        }

        foreach ($data as $key3 => $data2) {
            $query.= "'" . $data2 . "',";
        }
    }
    $query = substr($query, 0, strlen($query) - 1) . ");";
    print_r($query);
}

function createquery() {
    
}
?>

