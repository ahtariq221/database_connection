<?php
$link = mysqli_connect("127.0.0.1" , "root" , "" , "signup");
// check connection
if($link == false){
    die("Error : could not connect." .mysqli_connect_error());
}
if ($_POST['password']==$_POST['password1']){
    $username=mysqli_real_escape_string($link,$_POST['username']);
    $email=mysqli_real_escape_string($link,$_POST['email']);
    $password=mysqli_real_escape_string($link,$_POST['password']);
    $password1=mysqli_real_escape_string($link,$_POST['password1']);
    $sql = "INSERT INTO  register (username,email,password) VALUES('$username','$email','$password')";
    if(mysqli_query($link,$sql)){
        echo"Records added successfully";
        header("Refresh:1;url=index.html");
    }else{
        echo"Error : Could not able to execute $sql." . 
        mysqli_error($link);
        header("Refresh:1;url=index.html");


    }
}else{
    echo"password donot match";
    header("Refresh:2;url=index.html");

}

?>