<?php

// #5


$book_categories = [
    "comedy",
    "dark fantasy",
    "dc",
    "documentary",
    "drama",
    "fantasy",
    "grim dark",
    "horror",
    "monster of the week",
    "sci-fi",
    "time travel"
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ZH</title>
    <link rel="stylesheet" href="zh2.css">
</head>

<body>
    <header>
        <h1>
            Könyvek
            <!-- #2 -->
            (<span id="book_count"></span>)
        </h1>
    </header>

    <div id="content">
        <div>
            <h2>Könyvek listája</h2>

            <!-- #3 -->
            <div id="book_list">
                <div class="book">
                    <h3>
                        11.22.63
                        <!-- #7 -->
                        <a class="book_delete"
                           href="delete.php">
                            <button>
                                <img src="./icons/delete-icon.svg" />
                            </button>
                        </a>
                    </h3>
                    <img src="./images/11.22.63.jpg"/>
                    <div class="book_categories">
                        <a href="zh2.php">
                            <span class="book_category">Horror</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <h2>Új könyv felvétele</h2>
        <!-- #4 -->
        <form novalidate method="POST">
            <!-- #6 -->
            <div class="input">
                <label for="name">Címe</label>
                <input type="text" name="title" id="title" placeholder="Vs. the World">
            </div>
            <div class="input">
                <label for="desc">Borítója</label>
                <input type="text" name="cover" id="cover" placeholder="./images/placeholder.jpg">
            </div>
            <div class="input">
                <label for="game">Kategóriái</label>
                <!-- #1 -->
                <select name="categories[]" id="categories" multiple>
                    <option value="horror">horror</option>
                </select>
            </div>
            <div class="input">
                <button type="submit">➕</button>
            </div>
        </form>
    </div>
</body>

</html>
