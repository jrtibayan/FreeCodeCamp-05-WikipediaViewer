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

        <a href="https://en.wikipedia.org/wiki/Special:Random" target="_blank">
            <div class="random item">
                <img src="assets/img/random.png" alt="dice icon for random article" class="random-article">
            </div>
        </a>
    </div>

    <main>
        <div class="container">
            <h1 id="title">Wikipedia Viewer</h1>
        </div>

        <div class="search-container">
            <div class="Aligner">
                <div class="Aligner-item Aligner-item--top"></div>
                <div class="Aligner-item">
                    <div class="container">
                        <p>Please type what you want to search below... </p>
                        <input type="text" class="searchInput" placeholder="Type here then press ENTER">
                        <p>Press ENTER when done</p>
                    </div>
                </div>
                <div class="Aligner-item Aligner-item--bottom"></div>
            </div>
        </div>

        <div class="container">
            <div class="list-container hidden">
                <ul class="searchResultList">
                    <li class="search-item">
                        <h3>Search a keyword first before attempting to view search results.</h3>
                        <h4>Instructions</h4>
                        <ol>
                            <li>Click Search Icon</li>
                            <li>Type Your Keyword</li>
                            <li>Press Enter</li>
                        </ol>
                </ul>
                <div class="page-list"></div>
            </div>
        </div>
    </main>

    <footer class="app-info">
        <p>by <a href="http://www.jeric.rocks">Jeric Tibayan</a> | For more info <button class="more-info-btn">Click Me!</button></p>
    </footer>

    <div class="more-info">
        <div class="container">
            <h3>About this APP</h3>
            <p>This app is the 5th project and a requirement for the Free Code Camp FRONT END Developer Certificate.</p>
            <p>This app retrieves articles from the WIKIPEDIA API, sorts them out according to title before displaying the list of results.</p>

            <p>This app passed Googles Mobile-Friendly Test and the W3C CSS3 Validation</p>
            <p>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="Valid CSS!" />
                </a>
            </p>
            <h3>What I Used For This Project</h3>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>JQuery</li>
                <li>Wikipedia API</li>
            </ul>
            <p>PS: The search is limited to the top 100 results. Since the purpose of this app is to demonstrate my knowledge on the listed technolgies used, I believe setting a limit to the result should not reflect badly on my skills. This will also make the app search faster.</p>

            <h3>Comment / Suggestions</h3>
            <p>Have anything to say? Feel free to send me your thoughts on the form below.</p>
            <form method="POST" action="https://formspree.io/jeric_tibayan-webdev@yahoo.com">
                <input type="text" name="name" id="name" placeholder="Name">
                <textarea rows="5" name="quote" id="quote" placeholder="Quote"></textarea>
                <input type="submit" class="btn">
            </form>
            <button class="btn close-btn">CLOSE</button>
        </div>
    </div>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>