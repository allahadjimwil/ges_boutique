<!DOCTYPE html>
<html>
<head>
    <title>Produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Gestion des Produits</h2>

<a href="{{ route('produits.create') }}" class="btn btn-success mb-3">
Ajouter Produit
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Référence</th>
        <th>Désignation</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Action</th>
    </tr>

    @foreach($produits as $produit)
    <tr>
        <td>{{ $produit->id }}</td>
        <td>{{ $produit->reference }}</td>
        <td>{{ $produit->designation }}</td>
        <td>{{ $produit->prix_unitaire }}</td>
        <td>{{ $produit->stock }}</td>

        <td>
            <a href="{{ route('produits.edit',$produit->id) }}" class="btn btn-warning">
                Modifier
            </a>

            <form action="{{ route('produits.destroy',$produit->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger">
                    Supprimer
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
