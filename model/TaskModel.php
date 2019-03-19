<?php

function getAllTasks() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM tasks";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getTasksById($id) 
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM tasks WHERE list_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}
//INSERT INTO `lists`(`list_id`, `list_name`) VALUES (2,'testList')

function save(){

    $db = openDatabaseConnection();
    $sql = "INSERT INTO `tasks`(`task_id`,`task_name`,`list_id`) VALUES (:id,:task,:list_id);";
         
    //$sql = "INSERT INTO birthdays (name, day, month, year) VALUES (:name, :day, :month, :year);";
    
    $query = $db->prepare($sql);
    $query->bindParam(":id", $_POST['id']);
    $query->bindParam(":task", $_POST['task']);
    $query->bindParam(":list_id", $_POST['list_id']);
    $query->execute();
}

function deleteTask($id){
    $db = openDatabaseConnection();

    $sql = "DELETE FROM tasks WHERE task_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();
}

function getTaskById($id) 
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM tasks where task_id = :id ";

    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();

    $db = null;

    return $query->fetch(PDO::FETCH_ASSOC);
}

function updateTask($task){

$db = openDatabaseConnection();

    $sql = "UPDATE tasks SET task_name = :task WHERE task_id = :id ";
    
    $query = $db->prepare($sql);
    $query->bindParam(":task", $_POST['task']);
    $query->bindParam(":id", $_POST['id']);
    $query->execute();
 }
