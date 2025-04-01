<?php

$conn=mysqli_connect("localhost:3307",  "root", "", "learningphp");

if($conn)
{
    $sno=$_GET["sno"];
    $sql="SELECT * FROM players WHERE sno='$sno'";
    $query=$conn->query($sql);
    if($query->num_rows>0)
    {
        while($row=$query->fetch_assoc()){
            $username=$row["username"];
            $phoneno=$row["phoneno"];
            $Area=$row["Area"];
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Players</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
            color: black;

        }

        .container {
            width: 100vw;
            height: 100vh;
            background-color: rgb(20, 14, 14);
            background-image: url(46433-3840x2160-desktop-4k-squid-game-background-image.jpg);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .main {
            width: 400px;
            background: rgb(42, 37, 37);
            border-radius: 13px;
            box-shadow: 0 20px 20px black;
            backdrop-filter: blur(16px);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background: rgba(148, 10, 10, 0.1);
            border: 1px solid rgb(164, 159, 159);
            -webkit-backdrop-filter: blur(10px);
            padding: 50px 10px;
            margin-top: 50px;
        }

        .info {
            width: 80%;
            margin: 20px;
            font-size: 20px;
            border-radius: 10px;
            border: none;
            padding: 10px 20px;
            background-color: transparent;
            outline: none;
            border-bottom: 3px solid rgb(143, 143, 143);
            color: rgb(255, 255, 255);
            margin-left: 35px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .login {
            margin-bottom: 30px;
            font-size: 30px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .info::placeholder {
            color: rgb(255, 255, 255);
        }

        .submit {
            width: 250px;
            padding: 13px;
            font-size: 17px;
            border: none;
            border: 2px solid rgb(167, 167, 167);
            border-radius: 30px;
            cursor: pointer;
            margin-top: 30px;
            margin-left: 57px;
            background-color: transparent;
            background-color: white;
            color: rgb(6, 5, 5);
        }

        .remem {
            margin-left: 50px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color:aliceblue;

        }
    </style>
</head>

<body>

     <nav class="navbar navbar-expand-lg  bg-dark  border-bottom border-body" data-bs-theme="dark" style="background-color:black ;height:55px; font-size:14px;color:aliceblue;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="squid-game-high-quality-official-logo-hd-png-701751694778116qpwrsfyl0o-removebg-preview.png" alt="Logo" width="74" height="74" class="d-inline-block align-text-top"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index1.html">HOME</a>  
              <a class="nav-link" href="table.html">PLAYERS</a>
              <a class="nav-link" href="#">MEDIA</a>
              <a class="nav-link" href="#">NEWS</a>
              <a class="nav-link" href="#">SUPPORT</a>
              <a class="nav-link" href="#">MORE</a>
            </div>
          </div>
        </div>
      </nav>

    <div class="container">
        <div class="main">
            <h1 class="login">Sign Up!</h1>
            <form action="update1.php" method="get">
                <input type="number" name="sno" id="sno" value="<?php echo $sno; ?>" hidden>
                <input type="text" class="info" placeholder="Username" name="username" id="username" value="<?php echo $username; ?>">
                <input type="phone" class="info" placeholder="Phone no." name="phoneno" id="phoneno" value="<?php echo $phoneno; ?>" >
                <input type="text" class="info" placeholder="Area" name="Area" id="Area" value="<?php echo $Area; ?>">
                <label>
                    <input type="checkbox" name="option1" value="option1" class="remem">
                    Remember me
                </label>
                <input type="submit" placeholder="Login" class="submit">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>