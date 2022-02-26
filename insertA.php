<?php

require "connectionA.php";
 

$html = "Sheno tekstin per insertim...";
$stmt = $pdo->prepare("INSERT INTO `about_contents` (`contents`) VALUES (?)");
$stmt->execute([$html]);
echo "Inserted";