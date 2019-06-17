<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>data</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>

<div class="container">
        <div id="menu">
                    <a href="">er heerst paniek....</a>
                    <a href="index.php">onkunde</a>
                </div>
            
        <div id="php">
            <?php  


                echo " er zijn veel mensen die niet kunnen ", $_POST["wat"]," Neem nou ",$_POST["wie"]," Zelfs met de hulp van een ",$_POST["vakantie"]," of zelfs ",$_POST["getal"]," kan ",$_POST["wie"]," niet ",$_POST["wat"], " Dat heeft niet te maken met een gebrek aan ",$_POST["best"]," maar met een te veel aan ",$_POST["slecht"]," te veel ",$_POST["slecht"]," leidt tot verveling en dat is niet goed als je wilt ",$_POST["wat"]," helaas voor ",$_POST["wie"];
                                  
                if (empty($array[$i])) {
                    $errors[$i] = "required";
                    $array[$i] = "";
                }
                else {
                    $ans = test_input($array[$i]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$ans)) {
                        $errors[$i] = "Only letters and white space allowed"; 
                        $array[$i] = "";
                    }

                
                


                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
            ?>
        </div>
    <footer>Deze website is gemaakt door Justin van Zon</footer>
</div>



</body>
</html>