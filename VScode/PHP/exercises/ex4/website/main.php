<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Main</title>
</head>
<body>
<?php
echo "Here are the results of all php files that exist in <strong><em>website Folder</em></strong>";
echo "<br><ul><li>
Establish connection to MySQL with <a href='./conn.php'>conn.php</a>
</li>";
echo "<li>
Create database with <a href='./createDB.php'>createDB.php</a>
</li>";
echo "<li>
Create table with  <a href='./createTable.php'>createTable</a>
</li>";
echo "<li>
Insert data with <a href='./insertData.php'>insertData.php</a>
</li>";
echo "<li>
Delete a table with <a href='./deleteT.php'>deleteT.php</a>
</li>";
echo "<li>
Delete a database with <a href='./deleteDB.php'>deleteDB.php</a>
</li>";
echo "</ul><hr>";
include "./conn.php";
echo "<hr>";
include "./createDB.php";
echo "<hr>";
include "./createTable.php";
echo "<hr>";
include "./insertData.php";
echo "<hr>";
include "./deleteT.php";
echo "<hr>";
include "./deleteDB.php";
echo "<hr>";
?>
<img src="../unnamed.gif" alt="myAss">
<p>KIRBY :0</p>
</body>
</html>

