<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>francais</title>
</head>
<body>
    <h2>français</h2>
    <form action="" method="POST">
    <div class="form-group">
      <label for="titre">Titre:</label>
      <input type="text" class="form-control" id="titre" name="titre">
    </div>
    <div class="form-group">
      <label for="contenu">contenu:</label>
      <textarea name="contenu" id="contenu" cols="50" rows="10"></textarea>
    </div>
   <button type="button" name="btnP" id="btnP" class="btn btn-danger">Publier</button>
  </form>
   
<?php
    include_once("Models/Database.class.php");
    include_once('Controls/Controllers.class.php');
?>
    <div>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, labore. Beatae illo ducimus sint dolorem dolore sit nostrum magnam nesciunt?
        </p>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, labore. Beatae illo ducimus sint dolorem dolore sit nostrum magnam nesciunt?
        </p>
    </div>
<?php
 $db = new Database();
 Database::init("localhost","eselas","root","");

 $table = $db   ->selectSP()
                ->from("matiere")
                ->where("nom","=")
                ->order("matiere.id_matiere", "DESC")
                // ->getQuery();
                ->execute(['francais']);

                // var_dump($table);exit;
                echo "Leçon: ".$table[0]->cours."<br>";
                echo "exercice: ".$table[0]->exercice;

?>
</body>
</html>