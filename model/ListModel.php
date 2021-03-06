<?php

function getAllLists() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM lists ORDER BY list_id  DESC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAllListsASC() 
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM lists ORDER BY list_id  ASC";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}


function saveLists($answers){

    $db = openDatabaseConnection();
    $sql = "INSERT INTO `lists`(`list_id`, `list_name`) VALUES (:id,:list);";
         
    //$sql = "INSERT INTO birthdays (name, day, month, year) VALUES (:name, :day, :month, :year);";
    
    $query = $db->prepare($sql);
    $query->bindParam(":id", $_POST['id']);
    $query->bindParam(":list", $_POST['list']);
    $query->execute();
}

function deleteList($id){
    $db = openDatabaseConnection();

    $sql = "DELETE FROM lists WHERE list_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();

    $sqlT = "DELETE FROM tasks WHERE list_id=:id";
    $query = $db->prepare($sqlT);
    $query->bindParam(":id", $id);
    $query->execute();

}


function getListById($id) 
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM lists where list_id = :id ";

    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();

    $db = null;

    return $query->fetch(PDO::FETCH_ASSOC);
}

function updateList($list){

$db = openDatabaseConnection();

    $sql = "UPDATE lists SET list_name = :list WHERE list_id = :id ";
    
    $query = $db->prepare($sql);
    $query->bindParam(":list", $list['list_name']);
    $query->bindParam(":id", $list['id']);
    $query->execute();
 }
