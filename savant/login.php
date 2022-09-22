<?php
if(isset($_POST['username']) && isset($_POST['password'])){

    $servername="localhost";
    $usern="root";
    $pass="";
    $db_name="savant";
    $conn=mysqli_connect($servername,$usern,$pass,$db_name);
    if(!$conn){
        echo "connection failed";
    }else{
        echo "connected successfully";
    }
    $username=$_POST['username'];
    
    $password=$_POST['password'];
    $sql="INSERT INTO login(username,password) VALUES('$username','$password')";
    $res=mysqli_query($conn,$sql);
    echo "$res";
    if($res){
        echo "message sent successfully";
    }else{
        echo "message wasnot sent";
    }
}else{
    header("Location: minorproject.html");
}
?>