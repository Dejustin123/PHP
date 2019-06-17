<?php
function getGames($db) {
	$db = openDatabaseConnection();
	$stmt = $db->prepare("SELECT * FROM games");
	$stmt->execute();
	$results = $stmt->fetchAll();
	return $results;
}
function getId($db,$id)
{
	$db = openDatabaseConnection();

	$stmt = $db->prepare("SELECT * FROM `student` WHERE `student_id`= :id");
	$stmt->execute([':id'=>$id]);
	$results2 = $stmt->fetchAll();
	return $results2;
}