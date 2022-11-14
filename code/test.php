<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link href="style.css" rel="stylesheet" media="all">
  <title>First PHP</title>
 </head>
 <body>
    <div>
        Nous sommes le :<br/> 
        <?php echo date('d - m - Y'); ?>
    </div>

    <?php
        if( isset($_GET["name"]) && isset($_GET["age"]) ) {   
            echo 'Mon nom : ' . htmlspecialchars($_GET["name"]) . '<br/>';
            echo 'Mon age : ' . htmlspecialchars($_GET["age"]) . '<br/>';
        }
    ?>  
 </body>
</html>
