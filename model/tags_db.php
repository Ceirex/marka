<?php

/*register user and put there details into db*/
function insertTag($uf_name, $ul_name, $card_type, $nameoncard, $card_num,  $card_exp, $tag_qty, $user_id, $beach_id, $tag_type){

    global $db;
    $sql = "INSERT INTO `tags` (`beach_id`, `user_id`, `date_purchase`, `uf_name`, `ul_name`, `card_type`, `nameoncard`, `card_num`, `card_exp`, `tag_qty`, `type`)  
    		VALUES (:beachid, :userid, NOW(), :ufname, :ulname, :cardtype, :nameoncard, :cardnum, :cardexp, :tagqty, :type)";
    $statement = $db->prepare($sql);
    $statement->bindValue(':beachid',$beach_id);
    $statement->bindValue(':userid',$user_id);
    $statement->bindValue(":ufname",$uf_name);
    $statement->bindValue(":ulname",$ul_name);
    $statement->bindValue(":cardtype",$card_type);
    $statement->bindValue(":nameoncard",$nameoncard);
    $statement->bindValue(":cardnum",$card_num);
    $statement->bindValue(":cardexp",$card_exp);
    $statement->bindValue(":tagqty",$tag_qty);
    $statement->bindValue(":type",$tag_type);
    $result = $statement->execute();   
    $statement->closeCursor();
    
    return $result;
    //result is true on success, false on error
}

function tagPull($userid)
{
    
    global $db;
    $sql = "SELECT `tags`.`tag_id`, `beaches`.`beach_name`, `tags`.`type` FROM `tags`, `beaches` WHERE `tags`.`beach_id` = `beaches`.`beach_id` AND `tags`.`user_id` = :userid";
    $statement = $db->prepare($sql);
    $statement->bindValue(':userid', $userid);
    $statement->execute();
    $result = $statement->fetchAll();   
    $statement->closeCursor();
    


    return $result;
}

function tagRecord($tag_id)
{
    
    global $db;
    $sql = "SELECT tags.type, users.firstname, users.lastname, tags.tag_id, beaches.beach_name FROM tags, users, beaches WHERE tags.user_id = users.id AND tags.beach_id = beaches.beach_id AND tags.tag_id = :tag_id";
    $statement = $db->prepare($sql);
    $statement->bindValue(':tag_id', $tag_id);
    $statement->execute();
    $result = $statement->fetch();   
    $statement->closeCursor();
    
    return $result;
}


?>