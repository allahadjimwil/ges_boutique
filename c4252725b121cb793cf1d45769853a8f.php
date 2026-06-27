<!DOCTYPE html>
<html>
<head>
    <title>Commandes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Liste des Commandes</h2>

<a href="<?php echo e(route('commandes.create')); ?>" class="btn btn-primary mb-3">
    Nouvelle Commande
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Client</th>
        <th>Date</th>
        <th>Montant</th>
    </tr>

    <?php $__currentLoopData = $commandes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($commande->id); ?></td>
        <td><?php echo e($commande->client->nom); ?></td>
        <td><?php echo e($commande->date_commande); ?></td>
        <td><?php echo e($commande->montant_total); ?> FCFA</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

</body>
</html>
<?php /**PATH /home/guccima/ges_boutique/resources/views/commandes/index.blade.php ENDPATH**/ ?>