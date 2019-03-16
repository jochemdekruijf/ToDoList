<?php

function getAllLists() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM lists";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
//INSERT INTO `lists`(`list_id`, `list_name`) VALUES (2,'testList')

function saveTask($answers){

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
