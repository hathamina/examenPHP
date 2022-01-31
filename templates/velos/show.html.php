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




