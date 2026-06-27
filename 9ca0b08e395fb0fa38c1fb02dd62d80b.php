<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle Commande</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Nouvelle Commande - PELTAO VISION SHOP</h3>

</div>

<div class="card-body">

<form action="<?php echo e(route('commandes.store')); ?>" method="POST">

<?php echo csrf_field(); ?>

<div class="mb-3">

<label>Client</label>

<select name="client_id" class="form-control">

<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($client->id); ?>">
<?php echo e($client->nom); ?> <?php echo e($client->prenom); ?>

</option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>

</div>

<div class="mb-3">

<label>Produit</label>

<select name="produit_id" id="produit" class="form-control">

<?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option
value="<?php echo e($produit->id); ?>"
data-prix="<?php echo e($produit->prix_unitaire); ?>">

<?php echo e($produit->designation); ?>

(Stock : <?php echo e($produit->stock); ?>)

</option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>

</div>

<div class="mb-3">

<label>Date</label>

<input
type="date"
name="date_commande"
class="form-control"
value="<?php echo e(date('Y-m-d')); ?>">

</div>

<div class="mb-3">

<label>Prix Unitaire</label>

<input
type="number"
id="prix"
class="form-control"
readonly>

</div>

<div class="mb-3">

<label>Quantité</label>

<input
type="number"
id="quantite"
name="quantite"
class="form-control"
value="1"
min="1">

</div>

<div class="mb-3">

<label>Montant Total</label>

<input
type="number"
id="montant"
class="form-control"
readonly>

</div>

<button class="btn btn-success">

Enregistrer la commande

</button>

</form>

</div>

</div>

</div>

<script>

const produit=document.getElementById('produit');
const prix=document.getElementById('prix');
const quantite=document.getElementById('quantite');
const montant=document.getElementById('montant');

function calculer(){

let p=produit.options[produit.selectedIndex].dataset.prix;

prix.value=p;

montant.value=p*quantite.value;

}

produit.addEventListener('change',calculer);

quantite.addEventListener('input',calculer);

calculer();

</script>

</body>

</html>
<?php /**PATH /home/guccima/ges_boutique/resources/views/commandes/create.blade.php ENDPATH**/ ?>