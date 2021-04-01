<?php include("auth_session.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Ahoj, <?php echo $_SESSION['username']; ?>!</p>
        <p>Toto je test ci to funguje</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>