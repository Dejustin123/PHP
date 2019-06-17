<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Studenten app</title>	
	<link rel="stylesheet" href="<?= URL ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
           
      <li class="nav-item">
        <a href="<?= URL ?>home/index"> Home </a>
	 </li>
	 <li class="nav-item">
        <a href="<?= URL ?>student/create">Create  </a>
	 </li>
   <li class="nav-item">
        <a href="<?= URL ?>student/delete">delete  </a>
	 </li>
   <li class="nav-item">
        <a href="<?= URL ?>student/home">list</a>
	 </li>
    </ul>
  </div>
</nav>