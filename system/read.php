<?php
include('config.php');

$table_name = 'record';
$sql = "SELECT * FROM $table_name ORDER BY round DESC, player_score DESC";
$result = $conn->query($sql);

if (!$result->num_rows > 0) {
    echo "No records found.";
} else {
    header('Content-Type: application/json');
    $rows = array();

    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    echo json_encode($rows, JSON_NUMERIC_CHECK);
}

$conn->close();