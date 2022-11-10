<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet" media="all"> 
  <title>Base de données en PHP</title>
 </head>

 <body>
    <h1>Accès à la base de données</h1>

    <?php
    try {
        $dbuser = 'postgres';
        $dbpass = 'password';
        $dbhost = 'postgres-db';
        $dbname='mydb';
        $connec = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    }catch (PDOException $e) {
        echo "Error : " . $e->getMessage() . "<br/>";
        die();
    }
    
    $sql = 'SELECT name,lastname,title FROM book.person 
                JOIN book.book ON book.person.id = book.book.owner_id
                WHERE book.person.id = :id_person';

    $id_person = 1;
    $req = $connec->prepare($sql);
    $req->bindParam(':id_person', $id_person);
    $req->execute();
    $results = $req->fetchAll();
    ?>

    <br><br>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Titre</th>
        </tr>
        <?php foreach ($results as $row){ ?>
        <tr>            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['title']; ?></td>
        </tr>
        <?php }; ?>
    </table>
    
 </body>

</html>