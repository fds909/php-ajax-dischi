<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">

  <title>Dischi</title>
</head>
<body>
  <div id="app">
    <header>
      <img class="logo" src="img/spotify-logo.webp" alt="Spotify Logo">

      <!-- Filtro in base al genere -->
      <select v-model="selectedGenre"
              @change="$emit('selectGenre', selectedGenre)"
              name="genre"
              id="genre">
        <option value="all" selected="selected">All</option>
        <option value="rock">Rock</option>
        <option value="pop">Pop</option>
        <option value="jazz">Jazz</option>
        <option value="metal">Metal</option>
      </select>
    </header>

    <main>
      <div class="container">
        <div class="albums">
          <?php
            // foreach ($database as $album) {
            //   echo "<div class='album-container'>";
            //   echo "<img src=" . $album['poster'] . " alt='Album Cover' >";
            //   echo "<h3 class='title'>". $album['title'] . "</h3>";
            //   echo "<div class='author'>" . $album['author'] . "</div>";
            //   echo "<div class='year'>" . $album['year'] . "</div>";
            //   echo "</div>";
            // }
          ?>
          <div class="album-container" v-for="album in albums">
            <img :src="album.poster" alt="Album Cover">
            <h3 class="title">{{ album.title }}</h3>
            <div class="author">{{ album.author }}</div>
            <div class="year">{{ album.year }}</div>
          </div>   
        </div>
      </div>
    </main>

    <!-- Vue 2 cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- Axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Main js -->
    <script type="text/javascript" src="js/main.js"></script>
  </div>
</body>
</html>