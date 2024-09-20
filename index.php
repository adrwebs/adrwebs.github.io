<?php
 $page = $_SERVER['PHP_SELF'];
 $sec = "60";
 header("Refresh: $sec; url=$page");
 


 echo '<h1>' . date('l jS \of F Y h:i:s A') . '</h1><br>';?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include './inc/header.php'?>

    <link rel="stylesheet" href="./style/main.css">
    <script src="./scr/scr-menu.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adrwebs.dev</title>
    
    <?php include './inc/menu.php'?>
</head>
<body>


   <h3>Simple things make life better</h3>
    <h3>soon <span style="color:red">available</span> </h3>
    <h4>adrwebs.dev</h4>
   
</body>
<footer>
<?php include './inc/footer.php'?>

</footer>
</html>