<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Liste des produits</title>
    <script>
        function confirmDelete(id) {
            if(confirm('Voulez-vous vraiment supprimer ce produit ?')) {
                window.location.href = 'index.php?action=delete&id=' + id;
            }
        }
    </script>
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-50 min-h-screen flex flex-col items-center p-6">

    <h1 class="text-3xl font-bold mb-6">Gestion des Produits</h1>

    <div class="mb-6">
        <a href="index.php?action=create" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Ajouter un produit
        </a>
    </div>

    <div class="w-full max-w-4xl overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 border border-gray-300 text-left">Nom</th>
                    <th class="p-3 border border-gray-300 text-right">Quantité</th>
                    <th class="p-3 border border-gray-300 text-right">Prix (€)</th>
                    <th class="p-3 border border-gray-300 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($produits)): ?>
                    <?php foreach ($produits as $produit): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border border-gray-300"><?= htmlspecialchars($produit['nom']) ?></td>
                            <td class="p-3 border border-gray-300 text-right"><?= (int)$produit['quantite'] ?></td>
                            <td class="p-3 border border-gray-300 text-right"><?= number_format((float)$produit['prix'], 2, ',', ' ') ?></td>
                            <td class="p-3 border border-gray-300 text-center space-x-2">
                                <a href="index.php?action=edit&id=<?= $produit['_id'] ?>" class="inline-block bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 transition">Modifier</a>
                                <button onclick="confirmDelete('<?= $produit['_id'] ?>')" class="inline-block bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">Supprimer</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">Aucun produit trouvé.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
