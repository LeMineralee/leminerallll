<?php
if(isset($_POST['btnLogin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="aufa"){
        if($password==8){
            header('location:index.html');
        }else{
            header('location:login.php?pesan=Pasword salah');
        }
    }
}
    

?>