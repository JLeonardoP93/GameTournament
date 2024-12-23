CREATE DATABASE TournamentDB;

USE TournamentDB;

CREATE TABLE Teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_name VARCHAR(100) NOT NULL,
    player_id VARCHAR(100) NOT NULL,
    game_role VARCHAR(50) NOT NULL
);
