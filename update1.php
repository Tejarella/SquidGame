<?php
 // connects database
$conn=mysqli_connect("localhost:3307",  "root", "", "learningphp");

if($conn)
{
    $sno=$_GET["sno"];
    $username=$_GET["username"];
    $phoneno=$_GET["phoneno"];
    $Area=$_GET["Area"];

    $sql="UPDATE `players` SET `username`=' $username',`phoneno`='$phoneno',`Area`='$Area' WHERE `sno`='$sno'";
    $query=$conn->query($sql);
    if($query)
    {
        echo "<script>
        alert('Player details edited successfully');
        window.location.href='table.php';
        </script>";
    }
    else{
        echo "Not updated";
    }
}
else{
    echo "not connected";
}
?>