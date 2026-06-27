<!DOCTYPE html>
<html>
<head>
    <title>Liste des Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Gestion des Clients</h2>

<a href="<?php echo e(route('clients.create')); ?>" class="btn btn-primary mb-3">
    Ajouter un client
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($client->id); ?></td>
        <td><?php echo e($client->nom); ?></td>
        <td><?php echo e($client->prenom); ?></td>
        <td><?php echo e($client->telephone); ?></td>
        <td><?php echo e($client->email); ?></td>
        <td>
            <a href="<?php echo e(route('clients.edit',$client->id)); ?>" class="btn btn-warning">
                Modifier
            </a>

            <form action="<?php echo e(route('clients.destroy',$client->id)); ?>" method="POST" style="display:inline">
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
<?php /**PATH /home/guccima/ges_boutique/resources/views/clients/index.blade.php ENDPATH**/ ?>