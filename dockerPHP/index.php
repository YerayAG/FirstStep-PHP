<?php
$students = ["Felix", "Lucia", "Carlos", "Santiago", "Javi", "Yeray", "Gonzalo", 
             "Angel", "Alvaro", "Rafa", "Alejandro", "Nicolas", "Israel", 
             "Victor", "Pablo", "Isaac"];

$search = strtolower(trim($_POST['search'] ?? ''));
$results = $search ? array_filter($students, fn($name) => stripos($name, $search) !== false) : [];

if ($search) {
    echo $results ? implode("\n", $results) : "No se encontraron estudiantes.";
}
?>
