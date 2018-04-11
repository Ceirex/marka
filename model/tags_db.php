<?php

/*register user and put there details into db*/
function insertTag($uf_name, $ul_name, $card_type, $nameoncard, $card_num,  $card_exp, $tag_qty, $user_id, $beach_id){

    global $db;
    $sql = "INSERT INTO `tags` (`beach_id`, `user_id`, `date_purchase`, `uf_name`, `ul_name`, `card_type`, `nameoncard`, `card_num`, `card_exp`, `tag_qty`)  
    		VALUES (:beachid, :userid, NOW(), :ufname, :ulname, :cardtype, :nameoncard, :cardnum, :cardexp, :tagqty)";
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
    $result = $statement->execute();   
    $statement->closeCursor();
    
    return $result;
    //result is true on success, false on error
    
}


?>