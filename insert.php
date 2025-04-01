<?php
 // connects database
$conn=mysqli_connect("localhost:3307",  "root", "", "learningphp");

if($conn)
{
    $username=$_GET["username"];
    $phoneno=$_GET["phoneno"];
    $Area=$_GET["Area"];

    $sql="INSERT INTO `players`(`username`, `phoneno`, `Area`) VALUES ('$username','$phoneno','$Area')";
    $query=$conn->query($sql);
    if($query)
    {
        echo "";
    }
    else{
        echo "not inserted";
    }
}
else{
    echo "not connected";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .btn-back {
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 8px;
            border: none;
            background-color: rgb(245, 241, 242);
            color: rgb(203, 64, 87);
            cursor: pointer;
            transition: 0.3s;
            margin-top:300px;
            margin-left: 600px;
        }

        .btn-back:hover {
            background-color: rgb(188, 11, 11);
            border-radius: 17px;
            color:aliceblue;

        }
        body{
            background-image: url(bgm.jpeg);
            background-image: cover;
        }
    </style>
</head>
<body>
    <div class="insertpage">
        <a href="index.html"> <button class="btn-back">Submit another response</button></a>
    </div>
</body>
</html>