<?php
require_once "db.php";

$id = $_GET['id'] ?? null;

$stmt = $conn->prepare("SELECT content FROM wspolny_pulpit_notes WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($content);
$stmt->fetch();
echo $content ?? '';
