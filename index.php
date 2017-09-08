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
    <div class="buttons">
        <div class="list item">
            <img src="assets/img/list.png" alt="dice icon for random article" class="random-article">
        </div>
        <div class="search item active">
            <img src="assets/img/search.png" alt="dice icon for random article" class="random-article">
        </div>
        <div class="random item">
            <img src="assets/img/random.png" alt="dice icon for random article" class="random-article">
        </div>
    </div>

    <main>
        <div class="container">
            <h1 id="title">Wikipedia Viewer</h1>

            <div class="search-container">
                <p>Please type what you want to search below... </p>
                <input type="text" class="searchInput" placeholder="Type here then press ENTER">
                <p>Press ENTER when done</p>
            </div>

            <div class="list-container hidden">
                <ul class="searchResultList"></ul>
            </div>
        </div>
    </main>

    <footer class="app-info">
        <p>by <a href="http://www.jeric.rocks">Jeric Tibayan</a> | For more info <button class="more-info-btn">Click Me!</button></p>
    </footer>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>