<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <div class="bg-primary text-white p-5 rounded shadow mb-4">
        <h1 class="display-4">
            Bienvenue chez ALLAH-ADJIM
        </h1>

        <p class="lead">
            Système moderne de gestion commerciale : clients, produits, commandes et factures.
        </p>

        <hr>

        <p>
            Gérez efficacement votre boutique grâce à une plateforme rapide, sécurisée et professionnelle.
        </p>
    </div>

    <div class="row">

        <div class="col-md-3">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        Clients
                    </h5>

                    <h1>
                        <?php echo e($clients); ?>

                    </h1>

                    <p>Clients enregistrés</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        Produits
                    </h5>

                    <h1>
                        <?php echo e($produits); ?>

                    </h1>

                    <p>Produits disponibles</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        Commandes
                    </h5>

                    <h1>
                        <?php echo e($commandes); ?>

                    </h1>

                    <p>Commandes effectuées</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        Factures
                    </h5>

                    <h1>
                        <?php echo e($factures); ?>

                    </h1>

                    <p>Factures générées</p>
                </div>
            </div>
        </div>

    </div>

    <div class="card mt-5 shadow border-0">
        <div class="card-body">

            <h3 class="text-primary">
                À propos de ALLAH-ADJIM
            </h3>

            <p>
                ALLAH-ADJIM est une plateforme de gestion commerciale
                conçue pour faciliter le suivi des clients, des produits,
                des commandes et des factures.
            </p>

            <p>
                Cette application permet d'améliorer la gestion quotidienne
                de la boutique tout en offrant une meilleure expérience utilisateur.
            </p>

        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/guccima/ges_boutique/resources/views/dashboard/index.blade.php ENDPATH**/ ?>