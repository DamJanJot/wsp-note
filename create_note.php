<?php
require_once "db.php";

$title = $_POST['title'] ?? 'Bez tytułu';

$stmt = $conn->prepare("INSERT INTO wspolny_pulpit_notes (title, content) VALUES (?, '')");
$stmt->bind_param("s", $title);
$stmt->execute();
echo $stmt->insert_id;
