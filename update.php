<?php
 // connects database
$conn=mysqli_connect("localhost:3307",  "root", "", "learningphp");

if($conn)
{
    echo"Welcome";
    $username=$_GET["username"];
    $phoneno=$_GET["phoneno"];
    $Area=$_GET["Area"];

    $sql="UPDATE `players` SET `username`='Swaran',`phoneno`='9876556785',`Area`='New York' WHERE `sno`='5'";
    $query=$conn->query($sql);
    if($query)
    {
        echo "Updated";
    }
    else{
        echo "not Updated";
    }
}
else{
    echo "not connected";
}
?>