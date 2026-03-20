<?php 
require("header.php"); 
require("fonctions.php"); 

if (isset($_GET['id']) AND !empty($_GET['id'])) { 
    $id = htmlspecialchars($_GET['id']);
    $infoFilm = infoFilm($id);
}
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

/
.film-genre {
    margin-top: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
}

.film-genre-title {
    background: #2d6cdf;
    color: #fff;
    padding: 8px;
    text-align: center;
    font-weight: bold;
}

.film-genre ul {
    list-style: none;
    margin: 0;
    padding: 10px;
    text-align: center;
}

.film-genre li {
    padding: 5px 0;
    border-bottom: 1px solid #eee;
}

.film-genre li:last-child {
    border-bottom: none;
}
</style>

<div class="film-container">
    <div class="film-box">

        
        <div class="film-poster">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w500/'.$infoFilm['poster_path']; ?>">
        </div>

        
        <div class="film-info">

            <div class="film-title">
                <?php echo $infoFilm['title']; ?>
            </div>

            <div class="film-overview">
                <?php echo $infoFilm['overview']; ?>
            </div>

            
            <div class="film-genre">
                <div class="film-genre-title">Genre</div>
                <ul>
                    <?php 
                    if (!empty($infoFilm['genres'])) {
                        foreach ($infoFilm['genres'] as $genre) {
                            echo "<li>".$genre['name']."</li>";
                        }
                    }
                    ?>
                </ul>
            </div>

        </div>

    </div>
</div>

<?php require("footer.php"); ?>