<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js"></script>
    <title>Document</title>
</head>
<body>
<div class="button-top-right">
    <a href="addPerson.php"><button >Add</button></a>
</div>
<div class="image-top-left">
    <img src="image/logo.png"><br>
</div>
<div class="selectList">
    <?php include 'selectList.php'; ?>
</div>
<div id="table" class="tablePatients">
    <?php require "tablePatients.php"; ?>
</div>

</body>
</html>
