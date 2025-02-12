<?php
require_once '../config/database.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$filter = isset($_GET['filter']) ? $_GET['filter'] : '';

$query = "SELECT * FROM hotels WHERE name LIKE :search OR location LIKE :search";
if ($filter === "top-rated") {
    $query .= " ORDER BY rating DESC";
}

$stmt = $pdo->prepare($query);
$stmt->execute(['search' => "%$search%"]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche | Dookings</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4 flex justify-between">
        <h1 class="text-2xl font-bold">Dookings</h1>
        <ul class="flex space-x-4">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="search.php">Rechercher</a></li>
            <li><a href="profil.php">Profil</a></li>
        </ul>
    </nav>

    <!-- Section de recherche -->
    <section class="text-center py-10">
        <h2 class="text-3xl font-bold">Recherchez un hôtel ou un restaurant</h2>
        <form action="search.php" method="GET" class="mt-4 flex justify-center">
            <input type="text" name="search" placeholder="Nom, ville..." class="p-2 border rounded w-1/3">
            <select name="filter" class="p-2 border rounded ml-2">
                <option value="">Tous</option>
                <option value="top-rated">Mieux notés</option>
            </select>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 ml-2 rounded">Rechercher</button>
        </form>
    </section>

    <!-- Résultats de recherche -->
    <section class="p-10">
        <h2 class="text-2xl font-bold">Résultats</h2>
        <div class="grid grid-cols-3 gap-4 mt-4">
            <?php if (count($results) > 0): ?>
                <?php foreach ($results as $hotel): ?>
                    <div class="bg-white p-4 shadow-md">
                        <img src="../public/img/hotel1.jpg" alt="Hôtel" class="w-full h-40 object-cover rounded">
                        <h3 class="mt-2 font-bold"><?= htmlspecialchars($hotel['name']) ?></h3>
                        <p><?= htmlspecialchars($hotel['location']) ?> - ⭐ <?= $hotel['rating'] ?></p>
                        <button class="bg-blue-600 text-white px-4 py-2 mt-2 rounded">Voir plus</button>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-gray-600">Aucun résultat trouvé.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center p-4 mt-6">
        <p>&copy; 2025 Dookings. Tous droits réservés.</p>
    </footer>

</body>
</html>
