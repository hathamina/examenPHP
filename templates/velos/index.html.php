<?php foreach($velos as $velo){ ?>

<div class="row mt-3 mb-5 justify-content-center border">

    <h2><?= $velo->getName() ?></h2>
    <img height="300"src="<?= $velo->getImage() ?>">
    <h3><strong>descreption :</strong></h3>
    <p><?= $velo->getDescription() ?></p>
    <h3><?= $velo->getPrice() ?></h3>

   
    <a href="?type=velo&action=show&id=<?= $velo->getId() ?>" class="btn btn-primary">Decouvrir</a>
   
        </a>

  

</div>

<?php } ?>