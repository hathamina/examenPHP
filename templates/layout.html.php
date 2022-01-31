
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<nav class="navbar nav-expand-lg navbar-light bg-dark mb-5">
        <a href="/examenPHP" class="navbar-brand">Magasin velo</a>
        <!-- <a href="?type=cocktail&action=new" class="btn btn-primary">Create Cocktail</a> -->
        <!-- <a href="?type=sandwich&action=index" class="btn btn-primary">sandwiches</a> -->
</nav>

<div class="alert alert-warning alert-dismissible fade <?php if($_GET['info']=='deleted'){ echo"show";}?>" role="alert">
  
  <strong>Erreur</strong> il n'existe pas.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

<div class="alert alert-warning alert-dismissible fade <?php if($_GET['info']=='noId'){ echo"show";}?>" role="alert">
  
  <strong>Erreur</strong> ce produit n'existe pas.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

<div class="container">

    <?= $pageContent ?>
    
</div>

<footer class="bg-dark"> <p>By Amina hathroubi</p> </footer>

<style> 

footer{color: white; width: 100%; height: 30px; position: fixed; bottom: 0; }
footer p{ text-align:center; }

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>