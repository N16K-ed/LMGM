<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML and PHP Script</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <div class="main">
        <div>
            <a href="">Home</a>
        </div>
        <div>
            <a href="">Gallery</a>
        </div>
        <div>
            <a href="">Contact</a>

        </div>
        
    </div>
    <div class="message_php">
            <?php
            echo "<p>This is an echo command in PHP</p>";

            $name = "Fran";
            $age = "18";
            $height = "2.00";
            $isStudent = true;
            $isStudentString = boolval($isStudent)?'true' : 'false';


            echo '<p>In the next <code>echo</code> i m going to include some <br>
            variables like: <br>name, age, height, the boolean isStudent</p>';
            
            echo '<p>My name is <b>'. $name.'</b> and it ´s <b>'. $isStudentString. '</b> that i´m a student</p>';
            
            echo '<p>my age is <b>'. $age. '</b>, and height is <b>'. $height. '</b></p>';
            ?>
        </div>
</body>
</html>