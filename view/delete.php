<?php

include_once '../Repository/userRepository.php';

$userId = $_GET['id'];
$userRepository = new UserRepository();

$userRepository->deleteUser($userId);

header("location:dashboard.php");

?>