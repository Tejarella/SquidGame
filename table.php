<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

    <style>
        table {
            margin-top: 100px;
        }

        .btn {
            margin: 30px;
        }

        body {
            width: 100vw;
            height: 100vh;
            background-color: black;
            background-image: url(image.png);
            background-size: cover;
            overflow: hidden;
            backdrop-filter: blur(2px);


        }

        .table-container {
            max-width: 90%;
            margin: auto;
            margin-top: 80px;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;
            text-align: center;
            color: white;
            backdrop-filter: blur(5px);
            border-radius: 13px;
            box-shadow: 0 20px 20px black;
            backdrop-filter: blur(16px);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background: rgba(0, 0, 0, 0.1);
            border: 1px solid rgb(111, 107, 107);
            -webkit-backdrop-filter: blur(10px);
        }


        .btn-back {
            margin-left: 700px;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 8px;
            border: none;
            background-color: crimson;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-back:hover {
            background-color: rgb(188, 11, 11);
            border-radius: 17px;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-dark  border-bottom border-body" data-bs-theme="dark" style="background-color:black ;height:55px; font-size:14px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="squid-game-high-quality-official-logo-hd-png-701751694778116qpwrsfyl0o-removebg-preview.png" alt="Logo" width="74" height="74" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex align-items-center justify-content-center">
                    <a class="nav-link active" aria-current="page" href="index1.html">HOME</a>
                    <a class="nav-link" href="table.php">PLAYERS</a>
                    <a class="nav-link" href="#">MEDIA</a>
                    <a class="nav-link" href="#">NEWS</a>
                    <a class="nav-link" href="#">SUPPORT</a>
                    <a class="nav-link" href="#">MORE</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="table-container">
        <table class="table table-dark table-bordered mx-auto container py-5" style="background-color:dimgrey">
            <thead>
                <tr class="table text-center">
                    <th>Sno</th>
                    <th>UserName</th>
                    <th>Phoneno</th>
                    <th>Area</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php
            // connects database
            $conn = mysqli_connect("localhost:3307",  "root", "", "learningphp");

            if ($conn) {
                $sql = "SELECT * FROM `players`";
                $query = $conn->query($sql);
                if ($query->num_rows > 0) {
                    while ($row = $query->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>$row[sno]</td>";
                        echo "<td>$row[username]</td>";
                        echo "<td>$row[phoneno]</td>";
                        echo "<td>$row[Area]</td>";
                        echo "<td><a class='d-flex align-items-center justify-content-center' href='edit1.php?sno=$row[sno]'><i class='fa-solid fa-pen-to-square'></i></a></td>";
                        echo "<td><a class='text-danger d-flex align-items-center justify-content-center' onclick='return confirmation($row[sno])' href='delete.php?sno=$row[sno]'><i class='fa-solid fa-trash'></i><a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Date not present";
                }
            } else {
                echo "not connected";
            }
            ?>
        </table>
    </div>
    <script>
        function confirmation(sno) {
            return confirm("Do you really want to delete user with ID: " + sno + "?");
        }
    </script>

    <a href="index.html">
        <button class="btn-back">Go Back</button>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>