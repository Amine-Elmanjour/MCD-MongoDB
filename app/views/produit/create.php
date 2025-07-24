<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Ajouter un produit</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-50 min-h-screen flex flex-col items-center p-6">

    <h1 class="text-3xl font-bold mb-6">Ajouter un produit</h1>

    <form action="index.php?action=store" method="POST" class="w-full max-w-md bg-white p-6 rounded shadow space-y-4">
        <div>
            <label for="nom" class="block mb-1 font-semibold">Nom</label>
            <input type="text" name="nom" id="nom" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
        </div>

        <div>
            <label for="quantite" class="block mb-1 font-semibold">Quantité</label>
            <input type="number" name="quantite" id="quantite" min="0" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
        </div>

        <div>
            <label for="prix" class="block mb-1 font-semibold">Prix (€)</label>
            <input type="number" step="0.01" min="0" name="prix" id="prix" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
        </div>

        <div class="flex justify-between items-center">
            <a href="index.php" class="text-gray-600 hover:underline">Retour</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Ajouter</button>
        </div>
    </form>

</body>
</html>
