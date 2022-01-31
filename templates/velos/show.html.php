<div class="row mt-3 mb-5 justify-content-center border">
    <h2><?= $velo->getName() ?></h2>
    <img height="300"src="<?= $velo->getImage() ?>">
    <h3><strong>descreption :</strong></h3>
    <p><?= $velo->getDescription() ?></p>
    <h3><?= $velo->getPrice() ?></h3>

<form action="?type=velo&action=delete" method="post">
    <button class="btn btn-danger" type="submit" name="id" value="<?= $velo->getId() ?>">Supprimer</button>
</form>
</div>
<!----------------------- les avis --------------------------------->

<?php foreach($avis as $avi) { ?>
    <div class="row bg-info mt-2 mb-2 border border-primary border border-4">
        <h3><p><?= $avi->getAuthor() ?></p></h3>
        <p class="ms-5" ><?= $avi->getContent() ?></p>

        <form action="?type=comment&action=delete" method="post"><button type="submit" class="btn btn-danger mb-3" name="id" value="<?= $avi->getId() ?>">Supprimer</button></form>

    </div>
 <?php } ?>


<?php if(!$avis){ ?>
   <h2 class="my-5 mx-5"> votre avi nous interesse: <?= $velo->getName() ?></h2>
<?php } ?>



