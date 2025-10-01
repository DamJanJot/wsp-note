<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wspólny Notatnik (AJAX)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="description" content="website">
    <script src="https://kit.fontawesome.com/ef9d577567.js" crossorigin="anonymous"></script>
    <link rel="website icon" type="png" href="./img/logo.webp">
</head>
<body>

<!-- <h2>Wspólny zdalny pulpit</h2> -->

    <section class="container">
        <button id="toggleList">Lista pulpitów</button>
        <div id="noteList"></div>
        <textarea id="noteContent" placeholder="Wpisz coś..."></textarea>
    </section>
    
    
    
    <script src="assets/script.js"></script>

</body>
</html>
