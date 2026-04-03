<?php

require_once("get-proxy.php");// au lycée pour faire des requêtes https vous avons besoin d'indiquer le proxy


    //fonction qui retourne dans un tableau asociatif les 20 films les plus populaires 
    function popularMovies(){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }


      function topRatedMovies(){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }


      /*films par genre - Action 28 - Adventure  12 - Animation 16 - Comedy 35 - Crime  80 -Documentary 99
      Drama 18 - Family 10751 - Fantasy 14- History 36 - Horror 27 - Music 10402 - Science Fiction 878
      Thriller  53 - War 10752 - Western 37*/ 
      function filmParGenre($id){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";

        $url = "https://api.themoviedb.org/3/discover/movie?api_key=$key&language=fr-FR&with_genres=$id";
      $response = getProxy($url);
      //$response = file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=$key&language=fr-FR&with_genres=16");
      $result = json_decode($response, true);
      return $result['results'];
     
    }

      function infoFilm($movieId){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/$movieId?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        $result = json_decode($response, true);
        //print_r($result);
        return $result;
      }

      function acteurinfilm($movieId){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/$movieId/credits?api_key=$key";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/939243/credits?api_key=$key");
        $result = json_decode($response, true);
        //echo"<pre>";
        //print_r($result['cast']);
        //echo"</pre>";
        return $result['cast'];
      }
    
      function acteurinfo($acteurinfos){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/person/$acteurinfos?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/person/206?api_key=$key&language=fr-FR");
        $result = json_decode($response, true);
        //echo"<pre>";
        //print_r($result);
        //echo"</pre>";
        return $result;
      }

      function filmPacteur($acteurinfos){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/person/$acteurinfos/combined_credits?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/person/206/combined_credits?api_key=$key&language=fr-FR");
        $result = json_decode($response, true);
        //echo"<pre>";
        //print_r($result['cast']);
        //echo"</pre>";
        return $result['cast'];
      }
?>


