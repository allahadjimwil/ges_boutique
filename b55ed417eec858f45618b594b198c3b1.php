<!DOCTYPE html>
<html>
<head>
    <title>Produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Gestion des Produits</h2>

<a href="<?php echo e(route('produits.create')); ?>" class="btn btn-success mb-3">
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

    <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($produit->id); ?></td>
        <td><?php echo e($produit->reference); ?></td>
        <td><?php echo e($produit->designation); ?></td>
        <td><?php echo e($produit->prix_unitaire); ?></td>
        <td><?php echo e($produit->stock); ?></td>

        <td>
            <a href="<?php echo e(route('produits.edit',$produit->id)); ?>" class="btn btn-warning">
                Modifier
            </a>

            <form action="<?php echo e(route('produits.destroy',$produit->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button class="btn btn-danger">
                    Supprimer
                </button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>
<?php /**PATH /home/guccima/ges_boutique/resources/views/produits/index.blade.php ENDPATH**/ ?>