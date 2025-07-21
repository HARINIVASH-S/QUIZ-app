<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz club</title>
    <link rel="icon" href="icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            color: rgb(255, 255, 255);
            background-image: url(555.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        nav {
            background-color: #ffffff;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: gray;
            color: black;
        }
        h1 {
            color: whitesmoke;
            font-family: Algerian;
        }
        p {
            font-family: Algerian;
            color: yellow;
            font-size: medium;
        }
        .virus {
            border-style: dashed;
        }
        .kira, .kiran {
            border-style: dashed;
            font-size: larger;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        #worker{
            float: right;
            display: block;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        #worker :hover {
            background-color:  gray;
            color: black;}
        .container {
            padding: 1px; 
        }
        #tiger{
            
            padding top: 3px;
            padding bottom: 3px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <center>
            <h1 id="woard">QUIZ CLUB</h1>
            <p><u>Welcome to the Quiz Club! Test your skills by answering simple questions.</u></p>
        </center>
        <nav>
            <a class="virus" href="HOME.php">Home</a>
            <a class="virus" href="sign.php">Sign</a>
            <a class="virus" href="login.php">Login</a>
            <a class="virus" href="contact.php">Contact</a>
            <a class="virus" href="about.php">About Us</a>
            <form action="/search" method="get" id="worker">
                <input type="text" id="search" name="search" placeholder="Enter search term...">
                <button type="submit">Search</button>
            </form>
        </nav>
        <center>
            <h1>LOGIN to Continuous joy</h1>
            <hr>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="container" style="background-color: rgb(252, 249, 249);height: 200px;width: 400px;">
                    <table id="tiger" style="color: #100f0f;"><center>
                        <tr>
                            <td>User Name:</td> <td><input type="text" name="name" placeholder="Enter the name"></td>
                        </tr>
                        <tr>
                            <td>Password:</td><td><input type="password" name="password" placeholder="Enter the password"></td>
                        </tr>
                        <tr>
                            <td></td><td><input type="submit" value="Login"></td>
                        </tr></center>
                    </table>
                </div>
            </form>
        </center>
    </div>
    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "first";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $username = $_POST['name'];
        $password = $_POST['password'];
        $stmt = $conn->prepare("SELECT * FROM good WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['name'] = $username;
            header("Location: final.php");
            exit; 
        } else {
            echo "<h1>Credentials are wrong</h1>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>