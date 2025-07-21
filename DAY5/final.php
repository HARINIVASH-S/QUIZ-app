


<!DOCTYPE html>
<html>
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
            background-color:  gray;
            color: black;
        }
        .work{
            border-style: dotted;
            background-color: dark brown;
        }
        h1{
            color:dark brown;
            background-color: dark brown;
            font-family: Algerian
        }
        form{
            float: right;
            display: block;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
           
        }
        p{
            font-family: Algerian;
            color: yellow;
            font-size: medium;
            
        }
        h3{
            color: yellow;
        }
        img{
            float: right;
            border-style: dashed;
            
        }
        form :hover {
            background-color:  gray;
            color: black;
        }
        .virus{
            border-style: dashed;
        }
        table{
            box-shadow: rgb(12, 11, 11);
            row-gap: 3 ;
        }
        #good{
            border-style: dotted;
            border-color: black;
        }
        .kira{
            float: right;
            border-style: dashed;
            font-size: larger;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .kiran{
            float: left;
            border-style: dashed;
            font-size: larger;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .list-group{
  width: 300px;
}


    </style>
</head>
<body >
    <div class="container-fluid">
    <center>
        <h1 class="work">QUIZ CLUB</h1>
        <p><u>Welcome to the  Quiz Club! Test your skills by answering simple questions.</u></p>
        <?php
    session_start();

    
    if(isset($_SESSION['name'])) {
        
        echo '<span style="color: yellow; font-size: 40px;font-weight=50px"> Welcome ' . $_SESSION['name'];
    } else {
       
        echo "Username not found";
    }
?>
    </center>
    <nav>
      <a class="virus" href="HOME.php">Home</a>
      <a class="virus" href="sign.php">sign</a>
      <a class="virus" href="login.php">login</a>
      <a class="virus" href="contact.php">Contact</a>
      <a class="virus" href="about.php">About Us</a>
      <form action="/search" method="get">
          <input type="text" id="search" name="search" placeholder="Enter search term...">
          <button type="submit">Search</button>
      </form>
    </nav>
    <hr>
    <img height="400" width="400" src="fresh.jpeg.jpg" >
    <h1>Welcome to Quiz Club</h1>
    <h3 >Quiz based on subject</h3>
    <ol class="list-group list-group-numbered">
    <li class="list-group-item"><a  href="maths.php">Mathematics</a></li>
      <li class="list-group-item"><a href="history.php">History</a></li>
      <li class="list-group-item"><a href="science.php">Science</a></li>
      <li class="list-group-item"><a href="current.php">Current Affairs</a></li>
    </ol>
    <h3>Rules for Quiz Club</h3>
    <ul class="list-group">
      <li class="list-group-item">each subject contain 10 question</li>
      <li class="list-group-item">eash question contain one subject</li>
      <li class="list-group-item">you must give one for one question</li>
    </ul>
    <h3>Mark Distribution</h3>
    <table border="1">
        <tr>
            <td>Subject</td><td>No.of.question</td><td>marks</td>
        </tr>
        <tr>
            <td>Mathematics</td><td>20</td><td>40</td>
        </tr><tr>
            <td>History</td><td>20</td><td>40</td>
        </tr><tr>
            <td>Science</td><td>20</td><td>40</td>
        </tr><tr>
            <td>Current Affairs</td><td>20</td><td>40</td>
        </tr>
        <tr>
            <td></td><td>Total</td><td>160</td>
        </tr>
    </table>
    <hr>
    <center>
    <p id="good">quizclub@gmail.com | 044-332456785</p>
</center>
</div>
</body>
</html>