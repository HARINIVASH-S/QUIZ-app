<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
           
    </style>
</head>
<body>
    <div class="container-fluid">
        <center>
            <h1 id="woard">QUIZ CLUB</h1>
            <p><u>Welcome to the Quiz Club! Test your skills by answering simple questions.</u></p>
        </center>
        <nav>
            <a class="virus" href="index.php">Home</a>
            <a class="virus" href="sign.php">Sign</a>
            <a class="virus" href="login.php">Login</a>
            <a class="virus" href="contact.php">Contact</a>
            <a class="virus" href="about.php">About Us</a>
            <form action="/search" method="get" id="worker">
                <input type="text" id="search" name="search" placeholder="Enter search term...">
                <button type="submit">Search</button>
            </form>
        </nav>
        <hr>
        <hr>
        <center>
            <h1>Sign up to Continuous joy</h1>
            <hr>
            <div class="container" style="background-color: rgb(252, 249, 249); height: 200px; width: 400px;">
                <center>
                    <table id="tiger" style="color: #100f0f;">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <tr>
                                <td>name:</td> <td><input type="text" name="name" placeholder="Enter the name"></td>
                            </tr>
                            <tr>
                                <td>UserName:</td> <td><input type="text" name="username" placeholder="Enter the username"></td>
                            </tr>
                            <tr>
                                <td>Age:</td> <td><input type="number" name="age" placeholder="Enter the age"></td>
                            </tr>
                            <tr>
                                <td>Mail:</td><td><input type="email" name="email" placeholder="Enter the email"></td>
                            </tr>
                            <tr>
                                <td>Password:</td><td><input type="password" name="password" placeholder="Enter the password"></td>
                            </tr>
                            <tr>
                                <td></td><td><input type="submit" value="Sign Up"></td>
                            </tr>
                        </form>        
                    </table>
                </center>
            </div>
        </center>
        </div>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "csda23";
            $password = "csda23";
            $database = "csda23";
            
            
            $conn = new mysqli($servername, $username, $password, $database);
            
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $age = mysqli_real_escape_string($conn, $_POST['age']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            
        
            $check_username_sql = "SELECT * FROM good WHERE username = ?";
            $check_stmt = $conn->prepare($check_username_sql);
            $check_stmt->bind_param("s", $username);
            $check_stmt->execute();
            $check_result = $check_stmt->get_result();
            
            
            if ($check_result->num_rows > 0) {
                echo '<div style="text-align: center; color: green;" class="animate_animated animate_fadeIn">';
                echo "USER ALREADY EXISTS";
                echo '</div>';
            } else {
                
                $sql = "INSERT INTO good (name, username, age, mail, password) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssiss", $name, $username, $age, $email, $password);
                
                if ($stmt->execute()) {
                    echo '<div style="text-align: center; color: green;" class="animate_animated animate_fadeIn">';
                    echo "New record created successfully <br>";
                    echo "Now You Can Login";
                    echo '</div>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $stmt->close();
            }
            
            $conn->close();
        }
        ?>
    
</body>
</html>
