<?php 
		
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbName = "games";
        try {
            $conn = new PDO("mysql:host=".$servername.";dbname=".$dbName.";", $username, $password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        function getGames($conn) {
            $stmt = $conn->prepare("SELECT * FROM games");
            $stmt->execute();
            $results = $stmt->fetchAll();
            return $results;
        }

        function insertplan($conn,$data){
            $stmt = $conn->prepare("INSERT INTO `plan` (id, game, spelers, starttijd, uitlegger) VALUES(null, :game, :spelers, :starttijd, :uitlegger)");
			$stmt->execute([':game'=>$data['game'], ':spelers'=>$data['spelers'], ':starttijd'=>$data['starttijd'], ':uitlegger'=>$data['uitlegger']]);
        }

        function planning($conn){
            $stmt = $conn->prepare("SELECT * FROM `plan` ORDER BY `starttijd` ASC");
            $stmt->execute();
            $results = $stmt->fetchAll();
            return $results;
        }

        function update($conn,$data){
            $stmt = $conn->prepare("UPDATE plan SET game = :game, starttijd = :starttijd, uitlegger = :uitlegger, spelers = :spelers WHERE id = :id");
            $stmt->execute([':id'=>$data['game'], ':game'=>$data['game'], ':starttijd'=>$data['starttijd'], ':uitlegger'=>$data['uitlegger'], ':spelers'=>$data['spelers']]);
        }
        function Idget($conn,$id){
            $stmt = $conn->prepare("SELECT * FROM plan WHERE id = :id");
			$stmt->execute([':id'=>$id]);
            $results2 = $stmt->fetchAll();
            return $results2;
        }
        function snap($conn,$id){
            $stmt = $conn->prepare("DELETE FROM `games`.`plan` WHERE `plan`.`id` = :id");
            $stmt->execute([':id'=>$id]);
        }
 ?>

