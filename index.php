<?php


$array = [
    0 => ["Vanhoorne","Lilian","22","Felleries","passions" => ["dev","mangas","musique"]],
    1 => ["Tyb","Yann","21","Lille","passions" => ["dev","musique","escalade"]],
    2 => ["Pauquet","Pierrick","21","Felleries","passions" => ["hardware","voitures","jeux"]],
    3 => ["Dieu","Christelle","50","Felleries","passions" => ["Course à pieds","Cuisiner(pas cliché)"]],
    4 => ["Alcecilas","Maxime","23","Lille","passions" => ["musique","jeux","relativité"]],
    5 => ["Leclercq","Gabriel","23","Avesnes","passions" => ["Musique","jeux"]],
];

echo "<h1>Liste des élèves : <br><br></h1>";

foreach ($array as $index => $student){
    echo "<a class='list' href='info.php?index=$index'>Nom et Prénom : " . $student[0] . " " . $student[1] . "</a><br>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>test</title>
</head>
<body>

</body>
</html>