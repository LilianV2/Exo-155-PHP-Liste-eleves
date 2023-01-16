<?php


$array = [
    0 => ["Vanhoorne","Lilian","22","Felleries","passions" => ["dev","mangas","musique"]],
    1 => ["Tyb","Yann","21","Lille","passions" => ["dev","musique","escalade"]],
    2 => ["Pauquet","Pierrick","21","Felleries","passions" => ["hardware","voitures","jeux"]],
    3 => ["Dieu","Christelle","50","Felleries","passions" => ["Course à pieds","Cuisiner(pas cliché)"]],
    4 => ["Alcecilas","Maxime","23","Lille","passions" => ["musique","jeux"]],
    5 => ["Leclercq","Gabriel","23","Avesnes","passions" => ["Musique","jeux"]],
];

echo "<h1><a href='index.php'>Retour à la page principale</a><br><br></h1>";

 if (!isset($_GET['index'])){
     header('location: index.php?error=1');
 }

$index = intval($_GET['index']);

if ($index < 0){
    $index = 0;
}

echo "<p class='passions'><strong>Informations complémentaires : </strong><br><br></p>";

foreach ($array[$index] as $index => $student){
    if($index === "passions"){
        echo "<p class='passions'><br><strong>Passions : </strong><br></p>";
        foreach ($student as $passions){
            echo "<p>$passions</p>";
        }
    }
    else{
        echo "<p class='student'>$student</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>test</title>
</head>
<body>

</body>
</html>