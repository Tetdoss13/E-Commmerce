<?php
session_start();
include('connect.php');

if(isset($_GET['Bannir'])){
    $id_user = $_GET['Bannir'];
    $requete = "UPDATE `user` SET `etat`='Bannir' WHERE id_user = '".$id_user."'";
    $requete = mysqli_query($db,$requete) or die("Foobar");// doit normalement executer la requete SQL
    if($requete){
        header('Location: ../bannir_user.php');
    }
}else if(isset($_GET['Debannir'])){
    $id_user = $_GET['Debannir'];
    $requete = "UPDATE `user` SET `etat`='null' WHERE id_user = '".$id_user."'";
    $requete = mysqli_query($db,$requete) or die("Foobar");// doit normalement executer la requete SQL
    if($requete){
        header('Location: ../bannir_user.php?');
    }
}
?>