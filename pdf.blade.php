<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Facture</title>

<style>

body{
    font-family: Arial;
}

h1{
    text-align:center;
    color:#0d6efd;
}

table{
    width:100%;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th,td{
    padding:10px;
}

</style>

</head>

<body>

<h1>ALLAH-ADJIM</h1>

<h3>FACTURE</h3>

<hr>

<p><strong>Numéro :</strong> {{ $commande->id }}</p>

<p><strong>Date :</strong> {{ $commande->date_commande }}</p>

<p><strong>Client ID :</strong> {{ $commande->client_id }}</p>

<table>

<tr>
    <th>Désignation</th>
    <th>Montant</th>
</tr>

<tr>
    <td>Commande Boutique</td>
    <td>{{ $commande->montant_total }} FCFA</td>
</tr>

</table>

<h3 style="text-align:right">
Total : {{ $commande->montant_total }} FCFA
</h3>

<br><br>

<p>Merci pour votre confiance.</p>

<p><strong>ALLAH-ADJIM</strong></p>

</body>
</html>
