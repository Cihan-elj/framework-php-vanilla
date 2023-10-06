<?php 
require_once "./src/dbConnect.php";



//fonction getAll
function requestRead($connection){
    $statement = $connection->query("SELECT * FROM contacts WHERE 1");
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    dd($data);
}

requestRead($connection);

//fonction getById
// $statement = $connection->query("SELECT * FROM contacts WHERE id = 1");
// $statement = $connection->query("SELECT * FROM contacts WHERE `name` =  'Delaistre' AND `surname` = '".htmlspecialchars( $_GET["surname"])."'");

// $data = $statement->fetchAll(PDO::FETCH_ASSOC);
//fonction create 
function requestCreate($connection, $name, $surname){
    $statement = $connection->prepare("INSERT INTO `contacts` (`name`, `surname`, `status`) VALUES (?, ?, 'online') ");
    $statement->bindParam(1, $name);
    $statement->bindParam(2, $surname);
    $statement->execute();
}
$nom="elouajdi";
$prenom="cihan";
// requestCreate($connection, $nom, $prenom);



//fonction delete*

function requestDelete($id, $connection){
    $statement = $connection->prepare("DELETE FROM `contacts` WHERE id =?");
    $statement->bindParam(1, $id);
    $statement->execute();
}
$idToDelete = 5;
// requestDelete($idToDelete, $connection);

//fonction update


function requestUpdate($connection, $id, $status){
    $statement = $connection->prepare("UPDATE `contacts` SET `status` = '$status' WHERE id = ?");
    $statement->bindParam(1, $id);
    $statement->execute();
}

$idToUpdate= 1;
$status="online";
requestUpdate($connection, $idToUpdate, $status);


