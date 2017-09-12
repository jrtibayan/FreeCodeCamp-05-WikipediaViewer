// $(document).ready(function(){ ... });
// same as
// $(function(){...});


$(function() {
    console.log("start JS");


    var model = {
        searchText: '',
        searchResult: [],
        url: 'https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&callback=?&srlimit=20&srsearch='
    };


    var view = {
        init: function() {
            console.log("start view init");


            // search for article when enter is pressed
            var searchInputEle = $('.searchInput');
            searchInputEle.on('keyup', function (e) {
                if (e.keyCode == 13) {
                    viewModel.searchWiki();
                    //$(".search-container").toggleClass("hidden");
                    //$(".list-container").toggleClass("hidden");
                }
            });


            // show random article
            var randomBtnEle = $('.btn.random');
            randomBtnEle.on('click', function(e) {
                //e.preventDefault();
                //alert('random clicked');
            });

            // show more details
            var moreInfoBtnEle = $('.more-info-btn');
            moreInfoBtnEle.on('click', function(e) {
                viewModel.showMoreInfo();
            });


            // show more details
            var closeInfoBtnEle = $('.close-btn');
            closeInfoBtnEle.on('click', function(e) {
                viewModel.hideMoreInfo();
            });


            // show the search box
            var searchShowBtn = $('.search.item');
            searchShowBtn.on('click', function(e) {
                viewModel.showSearch();
            });


            // shows the list/search results
            var listShowBtn = $('.list.item');
            listShowBtn.on('click', function(e) {
                viewModel.showList();
            });


            console.log("end view init");
        },


        renderSearchResult: function() {
            console.log("start rendering view");

            var lineToAppend = '';
            for(i=0;i < model.searchResult.length;i++) {
                lineToAppend += '<li class="search-item"><a href="https://en.wikipedia.org/?curid=' + model.searchResult[i].pageid + '" target="_blank">';
                lineToAppend += '<h4>' + model.searchResult[i].title + '</h4>';
                lineToAppend += '<p>' + model.searchResult[i].snippet + '</p>';
                lineToAppend += '</a></li>';
            }
            $(".searchResultList").html(lineToAppend);

            console.log("end rendering view");
        }
    };


    var viewModel = {
        searchWiki: function() {
            console.log("start fetch data");

            viewModel.updateSearchText($('.searchInput').val());
            url = model.url + model.searchText;

            // use getJSON with url to fetch data
            $.getJSON(url)
            .then(function(data) {
                // list of articles are in data.query.search
                var resultsObj = data.query.search;
                // all pages are listed on resultsObj as its properties
                // for every key/pages in the resultsObj,
                // push to resultsArr for easy reference
                var resultsArr = [];
                for (var key in resultsObj) {
                    // skip loop if the property is from prototype
                    if (!resultsObj.hasOwnProperty(key)) continue;
                    resultsArr.push(resultsObj[key]);
                }

                resultsArr.sort(viewModel.byTitle);

                model.searchResult = resultsArr;

                console.log("end fetch data");
            }).then(function() {
                view.renderSearchResult();
            }).then(function() {
                viewModel.showList();
            });
        },


        getRandomPage: function() {
            var randomPage = 'Random Page';
            return randomPage;
        },


        init: function() {
            view.init();
        },

        byTitle: function(a,b) {
            if (a.title < b.title)
                return -1;
            if (a.title > b.title)
                return 1;
            return 0;
        },

        updateSearchText: function(searchText) {
            model.searchText = searchText;
        },

        showSearch: function() {
            $('.buttons .search')[0].classList.add("active");
            $('.buttons .list')[0].classList.remove("active");
            a = $(".list-container").animate( {opacity: 0}, 500 );
            a.promise().done(
                function() {
                    $(".list-container")[0].classList.add("hidden");
                    $(".search-container")[0].classList.remove("hidden");
                    $(".search-container").animate({opacity: 1}, 500);
                }
            );
        },

        showList: function() {
            $('.buttons .list')[0].classList.add("active");
            $('.buttons .search')[0].classList.remove("active");
            a = $(".search-container").animate( {opacity: 0}, 500 );
            a.promise().done(
                function() {
                    $(".search-container")[0].classList.add("hidden");
                    $(".list-container")[0].classList.remove("hidden");
                    $(".list-container").animate({opacity: 1}, 500);
                }
            );
        },

        showMoreInfo: function() {
            $('.more-info').css('display', 'block');
            $(".more-info").animate({top: 0}, 500);
        },

        hideMoreInfo: function() {
            $(".more-info").animate({opacity: 0}, 500, function() {
                $('.more-info').css('opacity', '1');
                $('.more-info').css('top', '100vh');
                $('.more-info').css('display', 'none');
            });
        }
    };

    viewModel.init();

    console.log("end JS");
}());

