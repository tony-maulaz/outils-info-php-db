<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/form.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>

  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS" checked="true">
  <label for="css">CSS</label><br><br>

  <input type="submit" value="Submit">
</form> 

<div style="margin-top: 20px;">
    <?php
        if( isset($_GET["fname"]) && isset($_GET["lname"]) && isset($_GET["fav_language"]) ) {   
            echo 'Prénom : ' . htmlspecialchars($_GET["fname"]) . '<br/>';
            echo 'Nom : ' . htmlspecialchars($_GET["lname"]) . '<br/>';
            echo 'Fav : ' . htmlspecialchars($_GET["fav_language"]) . '<br/>';
        }
    ?>
</div>

</body>
</html>