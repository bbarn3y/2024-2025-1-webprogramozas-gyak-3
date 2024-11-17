<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/task.css">
</head>

<body>
    <header>
        <h1>6. Teljesítmények / Achievements</h1>
    </header>

    <div id="content">
        <form novalidate>
            <div class="input">
                <label for="name">Teljesítmény neve / Achievement name</label>
                <input type="text" name="name" id="name" placeholder="Teljesítmény neve / Achievement name">
            </div>
            <div class="input">
                <label for="desc">Leírás / Description</label>
                <textarea name="desc" id="desc" placeholder="Leírás / Description"></textarea>
            </div>
            <div class="input">
                <label for="game">Játék / Game</label>
                <select name="game" id="game">
                    <option value="6595c8673b661">Hearts of Iron IV</option>
                    <option value="6595c8673b666">Crusader Kings III</option>
                </select>
            </div>
            <div class="input">
                <button type="submit">➕</button>
            </div>
        </form>

        <table id="achievements">
            <thead>
                <tr>
                    <th>Játék / Game</th>
                    <th>Teljesítmény neve / Achievement name</th>
                    <th>Leírás / Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="">Baldur's Gate 3</a></td>
                    <td>Teljesítmény 1</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </td>
                </tr>
                <tr>
                    <td><a href="">Jedi: Survivor</a></td>
                    <td>Teljesítmény 2</td>
                    <td>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                    </td>
                </tr>
                <tr>
                    <td><a href="">Hades 2</a></td>
                    <td>Teljesítmény 3</td>
                    <td>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                    </td>
                </tr>
                <tr>
                    <td><a href="">Jedi: Survivor</a></td>
                    <td>Teljesítmény 4</td>
                    <td>
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </td>
                </tr>
            </tbody>      
        </table>
    </div>
</body>

</html>