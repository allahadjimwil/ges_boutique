<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Ajouter Produit</h2>

<form action="{{ route('produits.store') }}" method="POST">
@csrf

<input type="text" name="reference" class="form-control mb-2" placeholder="Référence">

<input type="text" name="designation" class="form-control mb-2" placeholder="Désignation">

<input type="number" step="0.01" name="prix_unitaire" class="form-control mb-2" placeholder="Prix">

<input type="number" name="stock" class="form-control mb-2" placeholder="Stock">

<textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

<button class="btn btn-primary">
Enregistrer
</button>

</form>

</body>
</html>
