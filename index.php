<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <div class="container">
            <h1 id="title">Wikipedia Viewer</h1>

            <div class="random">
                <a href="https://en.wikipedia.org/wiki/Special:Random" target="_blank" >
                    <div class="random-btn">
                        <img src="assets/img/random.png" alt="dice icon for random article" class="random-article">
                    </div>
                </a>
            </div>

            <div class="search">
                <div class="search-btn">
                    <img src="assets/img/search.png" alt="dice icon for random article" class="random-article">
                </div>
                <input type="text" class="searchInput">
            </div>
            <ul class="searchResultList"></ul>
        </div>
    </main>

    <footer class="app-info">
        <p>by <a href="http://www.jeric.rocks">Jeric Tibayan</a> | For more info <button class="more-info-btn">Click Me!</button></p>
    </footer>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>