<link rel="stylesheet" href="style.css">

Authenticated as:
<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    die();
}
print_r($_SESSION);

if (!empty($_POST) && isset($_POST['logout'])) {
    unset($_SESSION['user']);
    header('Location: login.php');
    die();
}

?>

<button>User button</button>

<?php if(in_array('admin', $_SESSION['user']['roles'])): ?>
<button>Admin button</button>
<?php endif; ?>

<form action="" method="post">
    <input name="logout" hidden />
    <button type="submit">Logout</button>
</form>
