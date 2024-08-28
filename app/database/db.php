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

function create($table, $data)
{
    global $conn;
    $sql = "INSERT INTO users SET ";
    
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0){
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    
    $stmt = executeQuery($sql, $data);  // Pass the data to executeQuery
    $id = $stmt->insert_id;
    return $id;
}


function update($table,$id, $data)
{
        global $conn;
    // $sql = " UPDATE users SET username=?,admin=?,email=?,password=? WHERE id=?"
        $sql = "UPDATE $table SET ";
        
        $i = 0;
        foreach ($data as $key => $value) {
            if ($i === 0){
                $sql = $sql . " $key=?";
            } else {
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
        
        $sql = $sql . " WHERE id=?";
        $data['id'] = $id;
        $stmt = executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $stmt->affected_rows;
}

$data = [
    'username' => 'Master',
    'admin'  => 1,
    'email' => 'master@gmail.com',
    'password' => 'Brows'
];

$id = create('users', $data);
dd($id);

