<?php

$contId = $_GET['id'];
include_once 'contactRepository.php';



$contactRepository = new ContactRepository();

$contactRepository->deleteCont($contId);

header("location:dashboard.php");


?>