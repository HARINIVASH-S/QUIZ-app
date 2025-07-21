<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz club</title>
    <link rel="icon" href="icon.jpg">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            color: white; 
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
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: gray;
            color: black;
        }
        h3 {
            width: 800px;
            text-align: center;
        }
        h2 {
            color: rgb(244, 240, 24);
        }
        h1 {
            color: white;
            font-family: Algerian;
        }
        .work {
            border-style: dotted;
        }
        form {
            text-align: left; 
            color: white; 
            margin-left: auto; 
            margin-right: auto; 
            width: 50%; 
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
        .kira {
            float: right;
        }
        .kiran {
            float: left;
        }
        .killer {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container-fluid"></div>
    <center>
        <h1 class="work">QUIZ CLUB</h1>
        <p><u>Welcome to the Quiz Club! Test your skills by answering simple questions.</u></p>
    </center>
    <nav>
        <a class="virus" href="index.php">Home</a>
        <a class="virus" href="sign.php">Sign</a>
        <a class="virus" href="login.php">Login</a>
        <a class="virus" href="contact.php">Contact</a>
        <a class="virus" href="about.php">About Us</a>
        
    </nav>
    <hr>
    <h2>Science Quiz</h2>
    <form id="quizForm">
        <p>1. What is the chemical symbol for water?</p>
        <input type="radio" name="question1" value="a" id="q1a"><label for="q1a">a) H2O</label><br>
        <input type="radio" name="question1" value="b" id="q1b"><label for="q1b">b) CO2</label><br>
        <input type="radio" name="question1" value="c" id="q1c"><label for="q1c">c) NaCl</label><br><br>

        <p>2. What is the unit of measurement for electrical resistance?</p>
        <input type="radio" name="question2" value="a" id="q2a"><label for="q2a">a) Volt</label><br>
        <input type="radio" name="question2" value="b" id="q2b"><label for="q2b">b) Ohm</label><br>
        <input type="radio" name="question2" value="c" id="q2c"><label for="q2c">c) Ampere</label><br><br>

        <p>3. Which planet is known as the "Red Planet"?</p>
        <input type="radio" name="question3" value="a" id="q3a"><label for="q3a">a) Venus</label><br>
        <input type="radio" name="question3" value="b" id="q3b"><label for="q3b">b) Mars</label><br>
        <input type="radio" name="question3" value="c" id="q3c"><label for="q3c">c) Jupiter</label><br><br>

        <p>4. What is the process by which plants make their own food?</p>
        <input type="radio" name="question4" value="a" id="q4a"><label for="q4a">a) Photosynthesis</label><br>
        <input type="radio" name="question4" value="b" id="q4b"><label for="q4b">b) Respiration</label><br>
        <input type="radio" name="question4" value="c" id="q4c"><label for="q4c">c) Digestion</label><br><br>

        <p>5. What is the chemical symbol for oxygen?</p>
        <input type="radio" name="question5" value="a" id="q5a"><label for="q5a">a) O</label><br>
        <input type="radio" name="question5" value="b" id="q5b"><label for="q5b">b) CO2</label><br>
        <input type="radio" name="question5" value="c" id="q5c"><label for="q5c">c) H2O</label><br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result"></div>

    <script>
        document.getElementById('quizForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const answer1 = document.querySelector('input[name="question1"]:checked');
            const answer2 = document.querySelector('input[name="question2"]:checked');
            const answer3 = document.querySelector('input[name="question3"]:checked');
            const answer4 = document.querySelector('input[name="question4"]:checked');
            const answer5 = document.querySelector('input[name="question5"]:checked');

            let score = 0;

            if (answer1 && answer1.value === 'a') {
                score++;
            }
            if (answer2 && answer2.value === 'b') {
                score++;
            }
            if (answer3 && answer3.value === 'b') {
                score++;
            }
            if (answer4 && answer4.value === 'a') {
                score++;
            }
            if (answer5 && answer5.value === 'a') {
                score++;
            }

            document.getElementById('result').innerHTML = 'You scored ' + score + '/5';
        });
    </script>
</body>
</html>
