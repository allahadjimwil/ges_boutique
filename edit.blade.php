<!DOCTYPE html>
<html>
<head>
    <title>Modifier Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Modifier Client</h2>

<form action="{{ route('clients.update',$client->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nom" value="{{ $client->nom }}" class="form-control mb-2">

    <input type="text" name="prenom" value="{{ $client->prenom }}" class="form-control mb-2">

    <input type="text" name="telephone" value="{{ $client->telephone }}" class="form-control mb-2">

    <input type="text" name="adresse" value="{{ $client->adresse }}" class="form-control mb-2">

    <input type="email" name="email" value="{{ $client->email }}" class="form-control mb-2">

    <button class="btn btn-primary">
        Modifier
    </button>
</form>

</body>
</html>
