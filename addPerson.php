<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>SZO - Dodaj osobu</title>
</head>
<body>
<?php require "header.php"; ?>
<div class="form">
    <form action="checkPerson.php" method="post">
        <img src="image/logo.png"><br>
        First name: <input type="text" name="firstName"><br><br>
        Last name: <input type="text" name="lastName"><br><br>
        Birth date: <input type="text" name="birthYear"><br><br>
        Country: <?php include 'selectList.php'; ?>
        Infected: <input type="radio" name="infected" value="1"> Yes
                  <input type="radio" name="infected" value="0"> No <br><br>
        <input type="submit" value="Add">
        <input type="reset" value="Reset form">
    </form>
</div>
</body>
</html>