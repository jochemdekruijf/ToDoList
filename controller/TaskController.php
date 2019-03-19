<?php

require(ROOT . "model/TaskModel.php");


function index()
{
 render("tasks/index", array(
	'tasks' => getAllTasks()

	 ));
}
function index2($id)
{
 render("tasks/index", array(
    'tasks' => getTasksbyid($id),
    'id' => $id,

   ));
}

function add($id){
    render("tasks/add", [
        'id' => $id,
    ]);


}

function saveTask(){
    $result = save($_POST);
    header('Location: '.URL."task/index");
}

function delete($id)
{
    deleteTask($id);
    header('Location: '.URL."task/index");
}

function update($id){
    $task = getTaskById($id);
    render("tasks/update", ['task' => $task]);

   }

function saveTaskUpdate($id)
{
  updateTask($_POST,$id);
 header("Location: ".URL. "task/index");
}