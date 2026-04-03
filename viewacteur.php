<?php 
require("header.php"); 
require("fonctions.php"); 

if (isset($_GET['id']) AND !empty($_GET['id'])) { 
    $acteurinfos = htmlspecialchars($_GET['id']);
    $acteur = acteurinfo($acteurinfos);
}

$filmPacteur = filmPacteur($acteurinfos);

?>

<style>
.film-container {
    max-width: 1000px;
    margin: 40px auto;
}

.film-box {
    display: flex;
    gap: 30px;
    align-items: flex-start;
}


.film-poster img {
    width: 300px;
    border-radius: 5px;
}


.film-info {
    flex: 1;
}

.film-title {
    text-align: center;
    font-size: 26px;
    font-weight: bold;
    background: #eee;
    padding: 10px;
    border-radius: 5px;
}

.film-overview {
    margin-top: 15px;
    text-align: center;
    font-size: 14px;
    line-height: 1.6;
    color: #333;
}


</style>

<div class="film-container">
    <div class="film-box">

        
        <div class="film-poster">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w500/'.$acteur['profile_path']; ?>">
        </div>

        
        <div class="film-info">

            <div class="film-title">
                <?php echo $acteur['name']; ?>
            </div>

            <div class="film-overview">
                <?php echo $acteur['biography']; ?>
            </div>

            
          

        </div>

    </div>
</div>

<div class="album py-5 bg-body-tertiary">
  <div class="container">
       <h4>FILMS</h4>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach($filmPacteur as $film) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$film['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $film['title']; ?></strong>
              </p>
             <a href="view.php?id=<?= $film['id']; ?>"><button type="submit" class="btn btn-primary mt-auto">view</button></a>
             
            </div>
          </div>
        </div>
     <?php endforeach; ?>
    </div>
  </div>
</div>

<?php require("footer.php"); ?>


