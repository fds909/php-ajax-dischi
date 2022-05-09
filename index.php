<?php
    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
            'genre' => 'Rock'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
            'genre' => 'Jazz'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
            'genre' => 'Metal'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
            'genre' => 'Rock'
        ]
    ];
?>
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