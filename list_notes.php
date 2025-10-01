<?php
require_once "db.php";

$result = $conn->query("SELECT id, title FROM wspolny_pulpit_notes");
$notes = [];

while ($row = $result->fetch_assoc()) {
    $notes[] = $row;
}

echo json_encode($notes);
