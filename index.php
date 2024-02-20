<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <title>מכינת קורן</title>
</head>
<body>
    <?php 
    
    include("layout/header.php");
    include("action/connection.php");

    ?>

    <div class="content">
        <?php
        
        if(isset($_GET['page']) && !empty($_GET['page']))
        {
            $page = $_GET['page'];
            include_once('layout/' . $page . '.php');
        }
        else
        {
            include_once('layout/main.php');
        }
        
        ?>
    </div>

    <?php include("layout/footer.php"); ?>
</body>
</html>