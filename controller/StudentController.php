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
    $result = saveLists($_POST);
    header('Location: '.URL."student/index");
}

function delete($id)
{
    deleteList($id);
    header('Location: '.URL."student/index");
}

function update($id){
    $list = getListById($id);
    render("2dolist/update", ['list' => $list]);

   }

function saveList($id)
{
  updateList($_POST,$id);
 header("Location: ".URL. "student/index");
}