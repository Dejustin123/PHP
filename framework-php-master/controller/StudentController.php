<?php

require(ROOT . "model/StudentModel.php");

function index()
{
	render("student/index", array(
		'students' => getGames($db)
	));
}
function create()
{
	render("student/create");
}
function delete()
{
	render("student/delete");
}

