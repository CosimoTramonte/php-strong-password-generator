<?php 

session_start();

if(isset($_SESSION['passwordGenerator'])){
    $password = $_SESSION['passwordGenerator'];
}else{
    header('Location: ./index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>password</title>
</head>
<body>

<div class="container py-5">
    <h2>La tua password è </h2>
    <p><strong><?php echo $password?></strong></p>
</div>
    
</body>
</html>