<?php
session_start();
if (isset($_SESSION['email'])) {
    require './utilities.php';
    $email = $_SESSION['email'];
    session_unset();
} else {
    header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>subscription</title>
</head>

<body>
    <?php
    if (isCorrectEmail($email)) {
    ?>
        <div class="alert alert-success" role="alert">
            Email corretta
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger" role="alert">
            Email errata
        </div>
    <?php
    }
    ?>

</body>

</html>