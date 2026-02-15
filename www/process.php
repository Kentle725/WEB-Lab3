<?php
session_start();

$patient_name = htmlspecialchars($_POST['patient_name'] ?? NULL);
$age = htmlspecialchars($_POST['age'] ?? -1);
$doctor = htmlspecialchars($_POST['doctor'] ?? '');
$first_consultation = htmlspecialchars($_POST['first_consultation'] ?? FALSE);
$visit_form = htmlspecialchars($_POST['visit_form'] ?? '');

$errors = [];
if (empty($patient_name)) $errors[] = "Имя пациента не может быть пустым";
if (!is_numeric($age) or $age < 0) $errors[] = "Некорректно указан возраст";
if (empty($visit_form)) $errors[] = "Не выбрана форма визита";

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit();
}

$_SESSION['patient_name'] = $patient_name;
$_SESSION['age'] = $age;
$_SESSION['doctor'] = $doctor;
$_SESSION['first_consultation'] = $first_consultation;
$_SESSION['visit_form'] = $visit_form;

$line = $patient_name . ";" . $age . ";" . $doctor . ";" . $first_consultation . ";" . $visit_form . "\n";
file_put_contents("data.txt", $line, FILE_APPEND);

header("Location: index.php");
exit();
?>