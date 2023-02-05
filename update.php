<?php
include('function.php');
if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    if(!empty($username && $email)){
        $update=$pdo->prepare("UPDATE crud SET username=:username,email=:email WHERE id=$id");
        $update->bindParam(':username',$username);
        $update->bindParam(':email',$email);
        $update->execute();
        if($update->rowCount()){
            header("Location: list.php");
        }else{
            header("Location: list.php");
        }
    }
}
