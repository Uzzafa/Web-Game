<?php
header('Content-Type: application/json');

include('config.php');

$table_name = 'record';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $round = $_POST['round'];
    $player_score = $_POST['player_score'];
    $enemy_score = $_POST['enemy_score'];
    $created_at = $_POST['created_at'];

    $sql = "INSERT INTO $table_name (id, username, round, player_score, enemy_score, created_at) VALUES (NULL, '$username', $round, $player_score, $enemy_score, $created_at)";

    if ($conn->query($sql) === TRUE) {
        echo json_encode([
            'status' => 200,
            'message' => 'Record created successfully.'
        ]);
    } else {
        http_response_code(400);
        echo json_encode([
            'status' => 400,
            'message' => $conn->error
        ]);
    }

    $conn->close();
}
?>