<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEPATH.'css/style.css' ?>"/>
</head>
<body>
    
    <!-- navbar start -->
    <?php include_once('navbar.php'); ?>
    <!-- navbar end -->

    <?php 

        $path = isset($_GET['path']) ? $_GET['path'] : "";
        if( ($path != "") && file_exists($path)){
            include_once($path);
        }
    ?>
    
    <a href="<?php echo BASEPATH ;?>" class="btn btn-primary">home</a>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo BASEPATH.'js/main.js'; ?>"></script>
</body>
</html>