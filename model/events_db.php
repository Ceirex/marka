<?php


function getEvents(){
    global $db;
    $sql = "SELECT * FROM events";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}


?>