<?php session_start();
$varsession = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../plantilla/AdminLR/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

    
    <div class="pull-left">
    <img src="../plantilla/AdminLR/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
<label>Nombre: 
    <h2><?php echo $varsession;?></h2>
</label>
<label>Email: 
    <h3><?php// echo $varemail;?></h3>
</label>

    </div>

    
    

</body>
</html>