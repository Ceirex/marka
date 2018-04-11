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

function getBeachInfo($beachid){
    global $db;
    $statement = $db->prepare('SELECT * FROM beaches where beach_id = :beachid');
    $statement->bindValue(':beachid',$beachid);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $result;   
}


?>