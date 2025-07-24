<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Modifier le produit</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-50 min-h-screen flex flex-col items-center p-6">

    <h1 class="text-3xl font-bold mb-6">Modifier le produit</h1>

    <form action="index.php?action=update" method="POST" class="w-full max-w-md bg-white p-6 rounded shadow space-y-4">
        <input type="hidden" name="id" value="<?= htmlspecialchars($produit['_id']) ?>" />

        <div>
            <label for="nom" class="block mb-1 font-semibold">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($produit['nom']) ?>" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
        </div>

        <div>
            <label for="quantite" class="block mb-1 font-semibold">Quantité</label>
            <input type="number" name="quantite" id="quantite" min="0" value="<?= (int)$produit['quantite'] ?>" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
        </div>

        <div>
            <label for="prix" class="block mb-1 font-semibold">Prix (€)</label>
            <input type="number" step="0.01" min="0" name="prix" id="prix" value="<?= htmlspecialchars($produit['prix']) ?>" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
        </div>

        <div class="flex justify-between items-center">
            <a href="index.php" class="text-gray-600 hover:underline">Retour</a>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Enregistrer</button>
        </div>
    </form>

</body>
</html>
