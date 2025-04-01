<?php
 // connects database
$conn=mysqli_connect("localhost:3307",  "root", "", "learningphp");

if($conn)
{
    $sno=$_GET["sno"];
    $sql="DELETE FROM `players` WHERE sno='$sno'";
    $query=$conn->query($sql);

    if($query)
    {
        echo "<script>
        alert('Player deleted successfully');
        window.location.href='table.php';
        </script>";
         
    }
    else
    {
        echo "Not deleted";
    }
}
else{
    echo "not connected";
}
?>