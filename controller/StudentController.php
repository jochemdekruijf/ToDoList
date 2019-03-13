<?php

require(ROOT . "model/StudentModel.php");

function index()
{
 render("2dolist/index", array(
	'lists' => getAllLists()

	 ));
}

function add(){
    render("2dolist/add");
}

function save(){
    $result = saveTask($_POST);
    header('Location: '.URL."student/index");
}

function delete($id)
{
    deleteList($id);
    header('Location: '.URL."student/index");
}
function saveList()
{
  updateList($_POST);
 header("Location: ".URL. "student/index");
}