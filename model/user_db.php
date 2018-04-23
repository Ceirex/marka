<?php
/*if there is not a person match, then return false.  Otherwise return the person_id. */
function checklogin($username,$password){
    global $db;
    $statement = $db->prepare('SELECT id, firstname, lastname FROM users where username=:username and password = :password');
    $statement->bindValue(':username',$username);
    $statement->bindValue(':password',$password);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    if (empty($result['id'])){
        $result = false;
    } 
    return $result;    
}

function checklogin2($username,$password){
    global $db;
    $statement = $db->prepare('SELECT id, firstname, lastname FROM users where username=:username and password = :password and rights = 1');
    $statement->bindValue(':username',$username);
    $statement->bindValue(':password',$password);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    if (empty($result['id'])){
        $result = false;
    } 
    return $result;    
}

/*register user and put there details into db*/
function registeruser($firstname,$lastname,$username,$password,$email,$phone){
    global $db;
    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `password`, `email`, `phone`, `username`) VALUES (:firstname, :lastname, :password, :email, :phone, :username)";
    $statement = $db->prepare($sql);
    $statement->bindValue(':firstname',$firstname);
    $statement->bindValue(':lastname',$lastname);
    $statement->bindValue(":password",$password);
    $statement->bindValue(":email",$email);
    $statement->bindValue(":phone",$phone);
    $statement->bindValue(":username",$username);
    $result = $statement->execute();  
    $statement->closeCursor();
    
    return $result;
    //result is true on success, false on error
    
}

?>