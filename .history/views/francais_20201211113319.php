<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>francais</title>
</head>
<body>
    <h2>français</h2>

    include_once("Models/Database.class.php");
    include_once('Controls/Controllers.class.php');
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

 $table = $db   ->select("cours","exercice")
                ->from("matiere")
                ->order("matiere.id_matiere", "DESC")
                ->executeSP();

                echo "Leçon: ".$table[0]->cours;

?>
</body>
</html>