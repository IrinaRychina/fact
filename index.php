<?php
$hostname = 'localhost';
$username = 'Irina';
$password = '1234';
$dbname = 'People';

$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);
$sql = mysqli_query($dbconnect, "CREATE DATABASE $dbname");
$create_hobbies = mysqli_query($dbconnect, "CREATE TABLE Hobbies(
    id_hobbies int (5) AUTO_INCREMENT PRIMARY KEY,
    Name varchar (30) NOT NULL,
    Desription varchar(30) NOT NULL)"
);
$create_people_hobbies = mysqli_query($dbconnect, "CREATE TABLE People_hobbies(
    id_record int (5) AUTO_INCREMENT PRIMARY KEY,
    id_people int (5),
    id_hobbies int (5))"
);
$insert_people1 = mysqli_query($dbconnect, "INSERT INTO `people`(`id_person`, `Name`, `Surname`, `Age`) VALUES (1, 'Alex', 'Cole', 12)");
$insert_people2 = mysqli_query($dbconnect, "INSERT INTO `people` VALUES (NULL, 'Nicole', 'Smith', 10)");
$insert_people3 = mysqli_query($dbconnect, "INSERT INTO `people` VALUES (NULL, 'Bob', 'Smith', 14)");
$insert_people4 = mysqli_query($dbconnect, "INSERT INTO `people` VALUES (NULL, 'Ellen', 'Jones', 16)");
$delete_people1 = mysqli_query($dbconnect, "DELETE FROM `people` WHERE `id_person` = 3");
$insert_hobbies1 = mysqli_query($dbconnect, "INSERT INTO `hobbies` VALUES (NULL, 'Sport', 'football or swimming')");
$insert_hobbies2 = mysqli_query($dbconnect, "INSERT INTO `hobbies` VALUES (NULL, 'Computer games', 'Solitaire and Minesweeper')");
$insert_hobbies3 = mysqli_query($dbconnect, "INSERT INTO `hobbies` VALUES (NULL, 'Reading', 'sci-fi and popular science')");
$update_hobbies1 = mysqli_query($dbconnect, "UPDATE `hobbies` SET `Desription`='Solitaire, Minesweeper, Darkest Dungeon' WHERE `id_hobbies`=2");
$join_sql = mysqli_query($dbconnect, "SELECT id_record, id_person, Surname, Age, Description FROM people_hobbies JOIN people ON people_hobbies.id_people = people.id_person");

$alter_people_hobbies1 = mysqli_query($dbconnect, "ALTER TABLE `people_hobbies` ADD FOREIGN KEY (`id_hobbies`) REFERENCES `hobbies`(`id_hobbies`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
$alter_people_hobbies2 = mysqli_query($dbconnect, "ALTER TABLE `people_hobbies` ADD FOREIGN KEY (`id_people`) REFERENCES `people`(`id_person`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
