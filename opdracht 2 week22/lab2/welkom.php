<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>welkom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Vul hier uw gegevens in:</h1>
    <form action="welkom1.php" method="POST">
        First name: <input type="text" name="fname"><br>
        E-mail: <input type="email" name="email"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        $name = $_POST["fname"];
        $mail = $_POST["email"];

    echo $name."<br>".$mail;
    ?>
    
</body>
</html>