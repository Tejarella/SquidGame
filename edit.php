<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            
            <th>UserName</th>
            <th>Phoneno</th>
            <th>Area</th>
            <th>Edit</th>
        </tr>

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
            echo "<tr>";
          
            echo "<td>$row[username]</td>";
            echo "<td>$row[phoneno]</td>";
            echo "<td>$row[Area]</td>";
            echo "<td><a href='edit.php?sno=$row[sno]&name=$row[name] &rollno=$row[rollno]'>Edit</a></td>";
            echo "</tr>";
           
        }
    }
    else{
        echo "Date not present";
    }
}
else{
    echo "not connected";
}
?>
    </table>
</body>
</html>