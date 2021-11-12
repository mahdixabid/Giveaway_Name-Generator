<?php 
include './include/database.php';
include './include/form.php';
$data = 'SELECT * FROM users';
$result= mysqli_query($conn, $data);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="firstName" id="firstName" placeholder="firstName">
        <input type="text" name="lastNAME" id="lastNAME" placeholder="lastNAME">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="submit" name="submit" value="Send">
    </form>

    <?php
    foreach($users as $user): ?>
        <h4> <?php htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastNAME']); ?></h4>
        <?php endforeach; ?>
    <script src="./js/script.js"></script>
</body>
</html>