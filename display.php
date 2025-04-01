<?php
 // connects database
$conn=mysqli_connect("localhost:3307",  "root", "", "learningphp");

if($conn)
{
    $sql="SELECT * FROM `players`";
    $query=$conn->query($sql);
    if($query->num_rows > 0)
    {
        while($row = $query->fetch_assoc())
        {
            echo $row['sno']."<pre>".$row['username'] . " ". $row['phoneno'] . " " . $row["Area"] ."";
            echo "<br>";
            echo "<br>";
            echo "<hr>";
        }
    }
}
else{
    echo "not connected";
}
?>