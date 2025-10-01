<?php
require_once "db.php";

$id = $_POST['id'] ?? null;
$content = $_POST['content'] ?? '';

$stmt = $conn->prepare("UPDATE wspolny_pulpit_notes SET content = ? WHERE id = ?");
$stmt->bind_param("si", $content, $id);
$stmt->execute();
