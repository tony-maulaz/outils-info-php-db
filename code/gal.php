<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link href="style.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>First PHP</title>
 </head>
 <body>
    <h1> Galerie </h1>

    <?php
        $dir = 'images';
        $files = scandir($dir);
        foreach($files as $file) {
            echo "$file<br/>";
            

            if($file != '.' && $file != '..' && substr($file, -4) == '.jpg') {
                echo '<img src="' . $dir . '/' . $file . '" alt="' . $file . '" width="200" /><br/>';

                $inf = getimagesize($dir . '/' . $file);
                echo "$inf[3] <br/>";
                echo "<a href='images/$file'>Ouvrir</a><br/>";
            }
        }
    ?>  
 </body>
</html>