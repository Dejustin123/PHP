<?php


function getId($db,$id)
{
	$db = openDatabaseConnection();

	$stmt = $db->prepare("SELECT * FROM `student` WHERE `student_id`= :id");
	$stmt->execute([':id'=>$id]);
	$results2 = $stmt->fetchAll();
	return $results2;
}
function getGames($db) {
	$db = openDatabaseConnection();
	$stmt = $db->prepare("SELECT * FROM games");
	$stmt->execute();
	$results = $stmt->fetchAll();
	return $results;
}

function insertplan($db,$data){
	$db = openDatabaseConnection();
	$stmt = $db->prepare("INSERT INTO `plan` (id, game, spelers, starttijd, uitlegger) VALUES(null, :game, :spelers, :starttijd, :uitlegger)");
	$stmt->execute([':game'=>$data['game'], ':spelers'=>$data['spelers'], ':starttijd'=>$data['starttijd'], ':uitlegger'=>$data['uitlegger']]);
}

function planning($db){
	$db = openDatabaseConnection();
	$stmt = $db->prepare("SELECT * FROM `plan` ORDER BY `starttijd` ASC");
	$stmt->execute();
	$results = $stmt->fetchAll();
	return $results;
}

function update($db,$data){
	$db = openDatabaseConnection();
	$stmt = $db->prepare("UPDATE plan SET game = :game, starttijd = :starttijd, uitlegger = :uitlegger, spelers = :spelers WHERE id = :id");
	$stmt->execute([':id'=>$data['game'], ':game'=>$data['game'], ':starttijd'=>$data['starttijd'], ':uitlegger'=>$data['uitlegger'], ':spelers'=>$data['spelers']]);
}
function Idget($db,$id){
	$db = openDatabaseConnection();
	$stmt = $db->prepare("SELECT * FROM plan WHERE id = :id");
	$stmt->execute([':id'=>$id]);
	$results2 = $stmt->fetchAll();
	return $results2;
}
function snap($db,$id){
	$db = openDatabaseConnection();
	$stmt = $db->prepare("DELETE FROM `games`.`plan` WHERE `plan`.`id` = :id");
	$stmt->execute([':id'=>$id]);
}
function getGame(){
	$db = openDatabaseConnection();
	$stmt = $db->prepare("SELECT * FROM games WHERE id=:id");
	$stmt->execute([':id' => $_GET['id']]);
}