<?
if ($POST['reg2']=='delproducts'){
    $id=$_POST['id'];
    $reg='DELETE FROM `req` WHERE `id` ='.$id;
    if (mysql_query($link,$reg) or die(mysql_error($link))){
        echo "ok";
    }
}

?>