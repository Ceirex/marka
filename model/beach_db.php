<?php


function getBeaches(){
    global $db;
    $sql = "SELECT * FROM beaches";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}



?>