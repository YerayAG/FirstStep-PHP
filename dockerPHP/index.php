<?php
$students = [
    "Felix", "Lucia", "Carlos", "Santiago", "Javi", "Yeray", "Gonzalo", "Angel", 
    "Alvaro", "Rafa", "Alejandro", "Nicolas", "Israel", "Victor", "Pablo", "Isaac"
];

$search = strtolower(trim($_POST['search'] ?? ''));
$results = $search ? array_filter($students, fn($name) => stripos($name, $search) !== false) : [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de Estudiantes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Buscador de Estudiantes</h1>
    
    <form method="POST">
        <input type="text" id="search" name="search" value="<?= htmlspecialchars($search) ?>" required>
        <button type="submit">Buscar</button>
    </form>
    
    <?php if ($search): ?>
        <ul>
            <?php if ($results): ?>
                <?php foreach ($results as $name): ?>
                    <li><?= htmlspecialchars($name) ?></li>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No se encontraron estudiantes con "<?= htmlspecialchars($search) ?>".</p>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
