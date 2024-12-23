<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TournamentDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_name = $_POST["team_name"];
    $player_id = $_POST["player_id"];
    $game_role = $_POST["game_role"];

    $sql = "INSERT INTO Teams (team_name, player_id, game_role) VALUES ('$team_name', '$player_id', '$game_role')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
