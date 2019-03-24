<?php

require(ROOT . "model/ListModel.php");

function index()
{
 render("2dolist/index", array(
	'lists' => getAllLists($id),
  'id' => $id

	 ));
}

function indexASC()
{
 render("2dolist/index", array(
  'lists' => getAllListsASC($id),
  'id' => $id

   ));
}

function add(){
    render("2dolist/add");
}

function save(){
    $result = saveLists($_POST);
    header('Location: '.URL."list/index");
}

function delete($id)
{
    deleteList($id);
    header('Location: '.URL."list/index");
}

function update($id){
    $list = getListById($id);
    render("2dolist/update", ['list' => $list]);

   }

function saveList($id)
{
  updateList($_POST,$id);
 header("Location: ".URL. "list/index");
}