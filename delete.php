<?php
include 'function.php';
if (isset($_REQUEST['delete'])) { 
    $id = $_REQUEST['delete'];
    $delete=$pdo->prepare("DELETE FROM crud WHERE id=$id");
    $delete->execute();
    if($delete->rowCount()){
        header('Location:list.php');
    }
}
else{
    echo "fail";
}