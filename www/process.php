<?php
session_start();

$patient_name = htmlspecialchars($_POST['patient_name']);
$age = htmlspecialchars($_POST['age']);
$doctor = htmlspecialchars($_POST['doctor']);
$first_consultation = htmlspecialchars($_POST['first_consultation'] ?? FALSE);
$visit_form = htmlspecialchars($_POST['visit_form']);

$_SESSION['patient_name'] = $patient_name;
$_SESSION['age'] = $age;
$_SESSION['doctor'] = $doctor;
$_SESSION['first_consultation'] = $first_consultation;
$_SESSION['visit_form'] = $visit_form;

header("Location: index.php");
exit();
?>