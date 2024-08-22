<?php

require('connect.php');

function dd($value)
{
    echo "<pre>", print_r($value, true),"</pre>";
    die();

}

function executeQuery($sql, $data){
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table"; // Corrected SQL query
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute(); // Corrected method call
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);  
        return $records;
    }else {
        // return records that match conditions
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        
        $stmt = executeQuery($sql,$conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);  
        return $records;   
        
        }

}

function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table"; // Corrected SQL query

        // return records that match conditions
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        
        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql,$conditions);
        $records = $stmt->get_result()->fetch_assoc();  
        return $records;   
        
        

}

$conditions = [
    'admin' => 0,
    'username'  => 'dante'
];

$users = selectOne('users', $conditions);
dd($users);

