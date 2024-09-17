<?php 

function validateUser($user){
    $errors = array(); 
    
    if (empty($user['username'])){
        array_push($errors, 'username is required');
    }
    
    if (empty($user['email'])){
        array_push($errors, 'Email is required');
    }
    
    if (empty($user['password'])){
        array_push($errors, 'password is required');
    }
    
    if ($user['passwordConf'] !== $_POST['password']){
     array_push($errors, 'Password do not match');
    }

    $existingUser = selectOne('users',['email' => $user['email']]);
    if ($existingUser) {
        array_push($errors, 'Email already exists');
    }

    return $errors;
}


function validateLogin($user){
    $errors = array(); 
    
    if (empty($user['username'])){
        array_push($errors, 'username is required');
    }
    

    if (empty($user['password'])){
        array_push($errors, 'password is required');
    }
    


    return $errors;
}


?>