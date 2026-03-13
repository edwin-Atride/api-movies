<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php
if ( isset($_GET['id']) AND !empty($_GET['id'])){ 
    $id = $_GET['id'];
    $detail = infoFilm($movieId); 
}
?>



     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <?php $poster_path= $detail["poster_path"]; ?>
            <img src="<?php echo "<img src=\"https://image.tmdb.org/t/p/w500$poster_path\">";?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $movie['title']; ?></strong>
              </p>
             <a href="view.php"><button type="submit" class="btn btn-primary mt-auto">View</button></a>
            </div>
          </div>
        </div>
    </div>
 

<?php require("footer.php"); ?>