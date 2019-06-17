<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div id="form">    
            <form action="<?php echo htmlspecialchars("data.php")?>" method="POST">
                <p>
                    wat zou je graag willen kunnen?:
                    <input type="text" name="wat" required autofocus><?php echo $errors[0];?><br>
                    met welke persoon kun je goed opschieten?:
                    <input type="text" name="wie" required><?php echo $errors[1];?><br>
                    wat is je favoriete getal?:
                    <input type="text" name="getal" required><?php echo $errors[2];?><br>
                    wat heb je altijd bij je als je op vakantie gaat?:
                    <input type="text" name="vakantie" required><?php echo $errors[3];?><br>
                    wat is je beste persoonlijke eigenschap?:
                    <input type="text" name="best" required><?php echo $errors[4];?><br>
                    wat is je slechste eigenschap?:
                    <input type="text" name="slecht" required><?php echo $errors[5];?><br>
                    wat is het ergste wat je kan overkomen?:
                    <input type="text" name="ergste" required><?php echo $errors[6];?><br>
                </p>
                



                <input type="submit" value="Submit">
            </form>
        </div>    
        <footer>Deze website is gemaakt door Justin van Zon</footer>
    </div> 


     
    
</body>
</html>