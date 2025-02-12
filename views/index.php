<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dookings - Réservation Hôtels & Restaurants</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../public/js/script.js"></script>
    

    <!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Dookings</h1>
        <ul class="flex space-x-4">
            <li><a href="index.php" class="hover:underline">Accueil</a></li>
            <li><a href="search.php" class="hover:underline">Rechercher</a></li>
            <li><a href="profil.php" class="hover:underline">Profil</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-96 flex items-center justify-center text-white"
        style="background-image: url('https://source.unsplash.com/1600x900/?hotel')">
        <div class="text-center bg-black bg-opacity-50 p-6 rounded-lg">
            <h2 class="text-3xl font-bold">Trouvez le meilleur hôtel au Togo</h2>
            <p class="mt-4">Réservez en quelques clics et profitez d’un séjour parfait.</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-2 mt-4 rounded transition duration-300">
                Explorer maintenant
            </button>
        </div>
    </section>

    <!-- Section Hôtels populaires -->
    <section class="p-10">
        <h2 class="text-2xl font-bold text-center">Hôtels populaires</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="bg-white p-4 shadow-lg rounded-lg hover:scale-105 transition">
                <img src="https://source.unsplash.com/400x300/?luxury-hotel" class="w-full h-40 object-cover rounded">
                <h3 class="mt-2 font-bold">Hôtel du Golfe</h3>
                <p>⭐ 4.5 - Lomé</p>
                <button class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Réserver</button>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg hover:scale-105 transition">
                <img src="https://source.unsplash.com/400x300/?resort" class="w-full h-40 object-cover rounded">
                <h3 class="mt-2 font-bold">Hôtel 2 Février</h3>
                <p>⭐ 5.0 - Lomé</p>
                <button class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Réserver</button>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg hover:scale-105 transition">
                <img src="https://source.unsplash.com/400x300/?beach-hotel" class="w-full h-40 object-cover rounded">
                <h3 class="mt-2 font-bold">Sarakawa</h3>
                <p>⭐ 4.0 - Lomé</p>
                <button class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Réserver</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center p-4 mt-6">
        <p>&copy; 2025 Dookings. Tous droits réservés.</p>
    </footer>

</body>
</html>
