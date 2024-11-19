<?php
session_start();

$_SESSION['subTenKG'] = $subTenKG;
$_SESSION['overTenKG'] = $overTenKG;


header("Location: finalStep.php");




?>