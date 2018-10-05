<?php 
require_once('dbconnect.php');

$id = $_GET['id'];
$sql = 'DELETE FROM `tasks` WHERE `id` = ?';
$data = array($id);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

header('Location:index.php ');
exit();