<link rel="stylesheet" href="style.css">

<form action="authenticator.php" method="post">
    <div>
        <label for="username">Username: </label><br>
        <input type="text" name="username" id="username" value="<?= $_POST['username'] ?? "" ?>">
    </div>
    <div>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password" value="password">
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
