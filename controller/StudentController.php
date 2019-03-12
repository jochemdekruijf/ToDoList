<?php

require(ROOT . "model/StudentModel.php");

function index()
{
	render("2dolist/index", array(
		'students' => getAllStudents()
	));
}

function add(){
    render("2dolist/add");
}

function save(){
    $result = saveTask($_POST);
    header('Location: '.URL."student/index");
}