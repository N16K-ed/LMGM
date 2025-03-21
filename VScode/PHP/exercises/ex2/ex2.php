<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php 
if (isset($_POST["Name"])){
    echo "There's no name introduced.";
}else{
    echo '<h1>Welcome'.$_POST["Name"].'<br>'; 

}

?>
<?php 
if(isset($_POST["E-mail"])){
    echo "There's no e-mail introduced";
}else{
    echo 'Your email adress is: '.$_POST["E-mail"].'</h1>';
}

?>
</body>
</html>